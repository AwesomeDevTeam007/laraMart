<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateProductInventoryAPIRequest;
use App\Http\Requests\API\Backend\UpdateProductInventoryAPIRequest;
use App\Models\Backend\ProductInventory;
use App\Repositories\Backend\ProductInventoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProductInventoryController
 * @package App\Http\Controllers\API\Backend
 */

class ProductInventoryAPIController extends AppBaseController
{
    /** @var  ProductInventoryRepository */
    private $productInventoryRepository;

    public function __construct(ProductInventoryRepository $productInventoryRepo)
    {
        $this->productInventoryRepository = $productInventoryRepo;
    }

    /**
     * Display a listing of the ProductInventory.
     * GET|HEAD /productInventories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productInventoryRepository->pushCriteria(new RequestCriteria($request));
        $this->productInventoryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $productInventories = $this->productInventoryRepository->all();

        return $this->sendResponse($productInventories->toArray(), 'Product Inventories retrieved successfully');
    }

    /**
     * Store a newly created ProductInventory in storage.
     * POST /productInventories
     *
     * @param CreateProductInventoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductInventoryAPIRequest $request)
    {
        $input = $request->all();

        $productInventories = $this->productInventoryRepository->create($input);

        return $this->sendResponse($productInventories->toArray(), 'Product Inventory saved successfully');
    }

    /**
     * Display the specified ProductInventory.
     * GET|HEAD /productInventories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProductInventory $productInventory */
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            return $this->sendError('Product Inventory not found');
        }

        return $this->sendResponse($productInventory->toArray(), 'Product Inventory retrieved successfully');
    }

    /**
     * Update the specified ProductInventory in storage.
     * PUT/PATCH /productInventories/{id}
     *
     * @param  int $id
     * @param UpdateProductInventoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductInventoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductInventory $productInventory */
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            return $this->sendError('Product Inventory not found');
        }

        $productInventory = $this->productInventoryRepository->update($input, $id);

        return $this->sendResponse($productInventory->toArray(), 'ProductInventory updated successfully');
    }

    /**
     * Remove the specified ProductInventory from storage.
     * DELETE /productInventories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProductInventory $productInventory */
        $productInventory = $this->productInventoryRepository->findWithoutFail($id);

        if (empty($productInventory)) {
            return $this->sendError('Product Inventory not found');
        }

        $productInventory->delete();

        return $this->sendResponse($id, 'Product Inventory deleted successfully');
    }
}
