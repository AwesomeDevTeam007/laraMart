<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ProductAttributeDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateProductAttributeRequest;
use App\Http\Requests\Backend\UpdateProductAttributeRequest;
use App\Repositories\Backend\ProductAttributeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProductAttributeController extends AppBaseController
{
    /** @var  ProductAttributeRepository */
    private $productAttributeRepository;

    public function __construct(ProductAttributeRepository $productAttributeRepo)
    {
        $this->productAttributeRepository = $productAttributeRepo;
    }

    /**
     * Display a listing of the ProductAttribute.
     *
     * @param ProductAttributeDataTable $productAttributeDataTable
     * @return Response
     */
    public function index(ProductAttributeDataTable $productAttributeDataTable)
    {
        return $productAttributeDataTable->render('backend.product_attributes.index');
    }

    /**
     * Show the form for creating a new ProductAttribute.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.product_attributes.create');
    }

    /**
     * Store a newly created ProductAttribute in storage.
     *
     * @param CreateProductAttributeRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAttributeRequest $request)
    {
        $input = $request->all();

        $productAttribute = $this->productAttributeRepository->create($input);

        Flash::success('Product Attribute saved successfully.');

        return redirect(route('backend.productAttributes.index'));
    }

    /**
     * Display the specified ProductAttribute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            Flash::error('Product Attribute not found');

            return redirect(route('backend.productAttributes.index'));
        }

        return view('backend.product_attributes.show')->with('productAttribute', $productAttribute);
    }

    /**
     * Show the form for editing the specified ProductAttribute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            Flash::error('Product Attribute not found');

            return redirect(route('backend.productAttributes.index'));
        }

        return view('backend.product_attributes.edit')->with('productAttribute', $productAttribute);
    }

    /**
     * Update the specified ProductAttribute in storage.
     *
     * @param  int              $id
     * @param UpdateProductAttributeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductAttributeRequest $request)
    {
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            Flash::error('Product Attribute not found');

            return redirect(route('backend.productAttributes.index'));
        }

        $productAttribute = $this->productAttributeRepository->update($request->all(), $id);

        Flash::success('Product Attribute updated successfully.');

        return redirect(route('backend.productAttributes.index'));
    }

    /**
     * Remove the specified ProductAttribute from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productAttribute = $this->productAttributeRepository->findWithoutFail($id);

        if (empty($productAttribute)) {
            Flash::error('Product Attribute not found');

            return redirect(route('backend.productAttributes.index'));
        }

        $this->productAttributeRepository->delete($id);

        Flash::success('Product Attribute deleted successfully.');

        return redirect(route('backend.productAttributes.index'));
    }
}
