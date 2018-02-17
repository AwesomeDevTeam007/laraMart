<?php

namespace App\Repositories\Backend;

use App\Models\Backend\ProductPricing;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductPricingRepository
 * @package App\Repositories\Backend
 * @version February 17, 2018, 9:57 am UTC
 *
 * @method ProductPricing findWithoutFail($id, $columns = ['*'])
 * @method ProductPricing find($id, $columns = ['*'])
 * @method ProductPricing first($columns = ['*'])
*/
class ProductPricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'buying_price',
        'selling_price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductPricing::class;
    }
}
