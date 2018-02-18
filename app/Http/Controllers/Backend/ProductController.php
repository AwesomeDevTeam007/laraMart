<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ProductDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateProductRequest;
use App\Http\Requests\Backend\UpdateProductRequest;
use App\Repositories\Backend\ProductRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Backend\Product;
use App\Models\Backend\Branch;
use App\Models\Backend\ProductInventory;
use App\Models\Backend\ProductPricing;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param ProductDataTable $productDataTable
     * @return Response
     */
    public function index(ProductDataTable $productDataTable)
    {
        return $productDataTable->render('backend.products.index');
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productRepository->create($input);

        Flash::success('Product saved successfully.');

        return redirect(route('backend.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('backend.products.index'));
        }

        return view('backend.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       // $product = $this->productRepository->findWithoutFail($id);
       $product = Product::leftJoin("product_pricings as pp","pp.product_id","=","products.id")
                 ->where("products.id",$id)
                 ->first();

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('backend.products.index'));
        }


        $branches = Branch::leftJoin("product_inventories as pi","pi.branch_id","=","branches.id")
                   ->select("branches.*","pi.instock_qty","pi.notify_qty")
                   ->get();

        return view('backend.products.edit')
        ->with(['product'=> $product,
                'branches'=>$branches        
        ]);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param  int              $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('backend.products.index'));
        }

        $formData = $request->all();
       // dd($formData);

        $product = $this->productRepository->update($formData, $id);

        //update pricing

        $pp = ProductPricing::firstOrCreate([
            "product_id"=>$product->id
        ]);
        $pp->selling_price = $formData['selling_price'];
        $pp->buying_price  = $formData['buying_price'];
        $pp->save();

        //update inventory
        $i= 0;
        foreach($formData['branch_id'] as $branch){

            $pivt = ProductInventory::firstOrCreate([
                "product_id"=>$product->id,
                "branch_id"=>$branch
            ]);
            $pivt->instock_qty = $formData['instock_qty'][$i];
            $pivt->notify_qty = $formData['notify_qty'][$i];
            $pivt->save();

        $i++;
        }

        // update attributes



        Flash::success('Product updated successfully.');

        return redirect(route('backend.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('backend.products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('backend.products.index'));
    }
}
