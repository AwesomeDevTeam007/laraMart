<?php

namespace App\Repositories\Backend;

use App\Models\Backend\ProductAttribute;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductAttributeRepository
 * @package App\Repositories\Backend
 * @version February 17, 2018, 10:06 am UTC
 *
 * @method ProductAttribute findWithoutFail($id, $columns = ['*'])
 * @method ProductAttribute find($id, $columns = ['*'])
 * @method ProductAttribute first($columns = ['*'])
*/
class ProductAttributeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'key',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductAttribute::class;
    }
}
