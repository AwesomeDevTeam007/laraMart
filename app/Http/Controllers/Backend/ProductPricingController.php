<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ProductPricingDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateProductPricingRequest;
use App\Http\Requests\Backend\UpdateProductPricingRequest;
use App\Repositories\Backend\ProductPricingRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductPricingController extends AppBaseController
{
    /** @var  ProductPricingRepository */
    private $productPricingRepository;

    public function __construct(ProductPricingRepository $productPricingRepo)
    {
        $this->productPricingRepository = $productPricingRepo;
    }

    /**
     * Display a listing of the ProductPricing.
     *
     * @param ProductPricingDataTable $productPricingDataTable
     * @return Response
     */
    public function index(ProductPricingDataTable $productPricingDataTable)
    {
        return $productPricingDataTable->render('backend.product_pricings.index');
    }

    /**
     * Show the form for creating a new ProductPricing.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.product_pricings.create');
    }

    /**
     * Store a newly created ProductPricing in storage.
     *
     * @param CreateProductPricingRequest $request
     *
     * @return Response
     */
    public function store(CreateProductPricingRequest $request)
    {
        $input = $request->all();

        $productPricing = $this->productPricingRepository->create($input);

        Flash::success('Product Pricing saved successfully.');

        return redirect(route('backend.productPricings.index'));
    }

    /**
     * Display the specified ProductPricing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            Flash::error('Product Pricing not found');

            return redirect(route('backend.productPricings.index'));
        }

        return view('backend.product_pricings.show')->with('productPricing', $productPricing);
    }

    /**
     * Show the form for editing the specified ProductPricing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            Flash::error('Product Pricing not found');

            return redirect(route('backend.productPricings.index'));
        }

        return view('backend.product_pricings.edit')->with('productPricing', $productPricing);
    }

    /**
     * Update the specified ProductPricing in storage.
     *
     * @param  int              $id
     * @param UpdateProductPricingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductPricingRequest $request)
    {
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            Flash::error('Product Pricing not found');

            return redirect(route('backend.productPricings.index'));
        }

        $productPricing = $this->productPricingRepository->update($request->all(), $id);

        Flash::success('Product Pricing updated successfully.');

        return redirect(route('backend.productPricings.index'));
    }

    /**
     * Remove the specified ProductPricing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            Flash::error('Product Pricing not found');

            return redirect(route('backend.productPricings.index'));
        }

        $this->productPricingRepository->delete($id);

        Flash::success('Product Pricing deleted successfully.');

        return redirect(route('backend.productPricings.index'));
    }
}
