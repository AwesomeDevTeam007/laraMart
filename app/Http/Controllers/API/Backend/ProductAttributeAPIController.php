<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateProductAttributeAPIRequest;
use App\Http\Requests\API\Backend\UpdateProductAttributeAPIRequest;
use App\Models\Backend\ProductAttribute;
use App\Repositories\Backend\ProductAttributeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProductAttributeController
 * @package App\Http\Controllers\API\Backend
 */

class ProductAttributeAPIController extends AppBaseController
{
    /** @var  ProductAttributeRepository */
    private $productAttributeRepository;

    public function __construct(ProductAttributeRepository $productAttributeRepo)
    {
        $this->productAttributeRepository = $productAttributeRepo;
    }

    /**
     * Display a listing of the ProductAttribute.
     * GET|HEAD /productAttributes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productAttributeRepository->pushCriteria(new RequestCriteria($request));
        $this->productAttributeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $productAttributes = $this->productAttributeRepository->all();

        return $this->sendResponse($productAttributes->toArray(), 'Product Attributes retrieved successfully');
    }

    /**
     * Store a newly created ProductAttribute in storage.
     * POST /productAttributes
     *
     * @param CreateProductAttributeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAttributeAPIRequest $request)
    {
        $input = $request->all();

        $productAttributes = $this->productAttributeRepository->create($input);

        return $this->sendResponse($productAttributes->toArray(), 'Product Attribute saved successfully');
    }

    /**
     * Display the specified ProductAttribute.
     * GET|HEAD /productAttributes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProductAttribute $productAttribute */
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            return $this->sendError('Product Attribute not found');
        }

        return $this->sendResponse($productAttribute->toArray(), 'Product Attribute retrieved successfully');
    }

    /**
     * Update the specified ProductAttribute in storage.
     * PUT/PATCH /productAttributes/{id}
     *
     * @param  int $id
     * @param UpdateProductAttributeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductAttributeAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductAttribute $productAttribute */
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            return $this->sendError('Product Attribute not found');
        }

        $productAttribute = $this->productAttributeRepository->update($input, $id);

        return $this->sendResponse($productAttribute->toArray(), 'ProductAttribute updated successfully');
    }

    /**
     * Remove the specified ProductAttribute from storage.
     * DELETE /productAttributes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProductAttribute $productAttribute */
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            return $this->sendError('Product Attribute not found');
        }

        $productAttribute->delete();

        return $this->sendResponse($id, 'Product Attribute deleted successfully');
    }
}
