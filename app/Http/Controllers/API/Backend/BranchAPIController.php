<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateBranchAPIRequest;
use App\Http\Requests\API\Backend\UpdateBranchAPIRequest;
use App\Models\Backend\Branch;
use App\Repositories\Backend\BranchRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class BranchController
 * @package App\Http\Controllers\API\Backend
 */

class BranchAPIController extends AppBaseController
{
    /** @var  BranchRepository */
    private $branchRepository;

    public function __construct(BranchRepository $branchRepo)
    {
        $this->branchRepository = $branchRepo;
    }

    /**
     * Display a listing of the Branch.
     * GET|HEAD /branches
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->branchRepository->pushCriteria(new RequestCriteria($request));
        $this->branchRepository->pushCriteria(new LimitOffsetCriteria($request));
        $branches = $this->branchRepository->all();

        return $this->sendResponse($branches->toArray(), 'Branches retrieved successfully');
    }

    /**
     * Store a newly created Branch in storage.
     * POST /branches
     *
     * @param CreateBranchAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBranchAPIRequest $request)
    {
        $input = $request->all();

        $branches = $this->branchRepository->create($input);

        return $this->sendResponse($branches->toArray(), 'Branch saved successfully');
    }

    /**
     * Display the specified Branch.
     * GET|HEAD /branches/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Branch $branch */
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            return $this->sendError('Branch not found');
        }

        return $this->sendResponse($branch->toArray(), 'Branch retrieved successfully');
    }

    /**
     * Update the specified Branch in storage.
     * PUT/PATCH /branches/{id}
     *
     * @param  int $id
     * @param UpdateBranchAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBranchAPIRequest $request)
    {
        $input = $request->all();

        /** @var Branch $branch */
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            return $this->sendError('Branch not found');
        }

        $branch = $this->branchRepository->update($input, $id);

        return $this->sendResponse($branch->toArray(), 'Branch updated successfully');
    }

    /**
     * Remove the specified Branch from storage.
     * DELETE /branches/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Branch $branch */
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            return $this->sendError('Branch not found');
        }

        $branch->delete();

        return $this->sendResponse($id, 'Branch deleted successfully');
    }
}
