<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Branch;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BranchRepository
 * @package App\Repositories\Backend
 * @version February 18, 2018, 9:15 am UTC
 *
 * @method Branch findWithoutFail($id, $columns = ['*'])
 * @method Branch find($id, $columns = ['*'])
 * @method Branch first($columns = ['*'])
*/
class BranchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'address',
        'manager'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Branch::class;
    }
}
