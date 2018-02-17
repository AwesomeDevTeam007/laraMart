<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateProductPricingAPIRequest;
use App\Http\Requests\API\Backend\UpdateProductPricingAPIRequest;
use App\Models\Backend\ProductPricing;
use App\Repositories\Backend\ProductPricingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProductPricingController
 * @package App\Http\Controllers\API\Backend
 */

class ProductPricingAPIController extends AppBaseController
{
    /** @var  ProductPricingRepository */
    private $productPricingRepository;

    public function __construct(ProductPricingRepository $productPricingRepo)
    {
        $this->productPricingRepository = $productPricingRepo;
    }

    /**
     * Display a listing of the ProductPricing.
     * GET|HEAD /productPricings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productPricingRepository->pushCriteria(new RequestCriteria($request));
        $this->productPricingRepository->pushCriteria(new LimitOffsetCriteria($request));
        $productPricings = $this->productPricingRepository->all();

        return $this->sendResponse($productPricings->toArray(), 'Product Pricings retrieved successfully');
    }

    /**
     * Store a newly created ProductPricing in storage.
     * POST /productPricings
     *
     * @param CreateProductPricingAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductPricingAPIRequest $request)
    {
        $input = $request->all();

        $productPricings = $this->productPricingRepository->create($input);

        return $this->sendResponse($productPricings->toArray(), 'Product Pricing saved successfully');
    }

    /**
     * Display the specified ProductPricing.
     * GET|HEAD /productPricings/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProductPricing $productPricing */
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            return $this->sendError('Product Pricing not found');
        }

        return $this->sendResponse($productPricing->toArray(), 'Product Pricing retrieved successfully');
    }

    /**
     * Update the specified ProductPricing in storage.
     * PUT/PATCH /productPricings/{id}
     *
     * @param  int $id
     * @param UpdateProductPricingAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductPricingAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductPricing $productPricing */
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            return $this->sendError('Product Pricing not found');
        }

        $productPricing = $this->productPricingRepository->update($input, $id);

        return $this->sendResponse($productPricing->toArray(), 'ProductPricing updated successfully');
    }

    /**
     * Remove the specified ProductPricing from storage.
     * DELETE /productPricings/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProductPricing $productPricing */
        $productPricing = $this->productPricingRepository->findWithoutFail($id);

        if (empty($productPricing)) {
            return $this->sendError('Product Pricing not found');
        }

        $productPricing->delete();

        return $this->sendResponse($id, 'Product Pricing deleted successfully');
    }
}
