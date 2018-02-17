<?php

namespace App\Repositories\Backend;

use App\Models\Backend\ProductInventory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductInventoryRepository
 * @package App\Repositories\Backend
 * @version February 17, 2018, 10:09 am UTC
 *
 * @method ProductInventory findWithoutFail($id, $columns = ['*'])
 * @method ProductInventory find($id, $columns = ['*'])
 * @method ProductInventory first($columns = ['*'])
*/
class ProductInventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'instock_qty',
        'notify_qty',
        'branch_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductInventory::class;
    }
}
