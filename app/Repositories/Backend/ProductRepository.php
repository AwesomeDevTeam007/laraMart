<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Product;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories\Backend
 * @version February 17, 2018, 9:31 am UTC
 *
 * @method Product findWithoutFail($id, $columns = ['*'])
 * @method Product find($id, $columns = ['*'])
 * @method Product first($columns = ['*'])
*/
class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'code',
        'barcode',
        'barcode_path',
        'thubmnail',
        'category_id',
        'subcategory_id',
        'description',
        'status',
        'branch_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
