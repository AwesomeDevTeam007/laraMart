<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\BranchDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateBranchRequest;
use App\Http\Requests\Backend\UpdateBranchRequest;
use App\Repositories\Backend\BranchRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BranchController extends AppBaseController
{
    /** @var  BranchRepository */
    private $branchRepository;

    public function __construct(BranchRepository $branchRepo)
    {
        $this->branchRepository = $branchRepo;
    }

    /**
     * Display a listing of the Branch.
     *
     * @param BranchDataTable $branchDataTable
     * @return Response
     */
    public function index(BranchDataTable $branchDataTable)
    {
        return $branchDataTable->render('backend.branches.index');
    }

    /**
     * Show the form for creating a new Branch.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.branches.create');
    }

    /**
     * Store a newly created Branch in storage.
     *
     * @param CreateBranchRequest $request
     *
     * @return Response
     */
    public function store(CreateBranchRequest $request)
    {
        $input = $request->all();

        $branch = $this->branchRepository->create($input);

        Flash::success('Branch saved successfully.');

        return redirect(route('backend.branches.index'));
    }

    /**
     * Display the specified Branch.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('backend.branches.index'));
        }

        return view('backend.branches.show')->with('branch', $branch);
    }

    /**
     * Show the form for editing the specified Branch.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('backend.branches.index'));
        }

        return view('backend.branches.edit')->with('branch', $branch);
    }

    /**
     * Update the specified Branch in storage.
     *
     * @param  int              $id
     * @param UpdateBranchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBranchRequest $request)
    {
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('backend.branches.index'));
        }

        $branch = $this->branchRepository->update($request->all(), $id);

        Flash::success('Branch updated successfully.');

        return redirect(route('backend.branches.index'));
    }

    /**
     * Remove the specified Branch from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $branch = $this->branchRepository->findWithoutFail($id);

        if (empty($branch)) {
            Flash::error('Branch not found');

            return redirect(route('backend.branches.index'));
        }

        $this->branchRepository->delete($id);

        Flash::success('Branch deleted successfully.');

        return redirect(route('backend.branches.index'));
    }
}
