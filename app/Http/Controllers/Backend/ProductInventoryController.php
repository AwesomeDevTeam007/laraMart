<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ProductInventoryDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateProductInventoryRequest;
use App\Http\Requests\Backend\UpdateProductInventoryRequest;
use App\Repositories\Backend\ProductInventoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductInventoryController extends AppBaseController
{
    /** @var  ProductInventoryRepository */
    private $productInventoryRepository;

    public function __construct(ProductInventoryRepository $productInventoryRepo)
    {
        $this->productInventoryRepository = $productInventoryRepo;
    }

    /**
     * Display a listing of the ProductInventory.
     *
     * @param ProductInventoryDataTable $productInventoryDataTable
     * @return Response
     */
    public function index(ProductInventoryDataTable $productInventoryDataTable)
    {
        return $productInventoryDataTable->render('backend.product_inventories.index');
    }

    /**
     * Show the form for creating a new ProductInventory.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.product_inventories.create');
    }

    /**
     * Store a newly created ProductInventory in storage.
     *
     * @param CreateProductInventoryRequest $request
     *
     * @return Response
     */
    public function store(CreateProductInventoryRequest $request)
    {
        $input = $request->all();

        $productInventory = $this->productInventoryRepository->create($input);

        Flash::success('Product Inventory saved successfully.');

        return redirect(route('backend.productInventories.index'));
    }

    /**
     * Display the specified ProductInventory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            Flash::error('Product Inventory not found');

            return redirect(route('backend.productInventories.index'));
        }

        return view('backend.product_inventories.show')->with('productInventory', $productInventory);
    }

    /**
     * Show the form for editing the specified ProductInventory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            Flash::error('Product Inventory not found');

            return redirect(route('backend.productInventories.index'));
        }

        return view('backend.product_inventories.edit')->with('productInventory', $productInventory);
    }

    /**
     * Update the specified ProductInventory in storage.
     *
     * @param  int              $id
     * @param UpdateProductInventoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductInventoryRequest $request)
    {
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            Flash::error('Product Inventory not found');

            return redirect(route('backend.productInventories.index'));
        }

        $productInventory = $this->productInventoryRepository->update($request->all(), $id);

        Flash::success('Product Inventory updated successfully.');

        return redirect(route('backend.productInventories.index'));
    }

    /**
     * Remove the specified ProductInventory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            Flash::error('Product Inventory not found');

            return redirect(route('backend.productInventories.index'));
        }

        $this->productInventoryRepository->delete($id);

        Flash::success('Product Inventory deleted successfully.');

        return redirect(route('backend.productInventories.index'));
    }
}
