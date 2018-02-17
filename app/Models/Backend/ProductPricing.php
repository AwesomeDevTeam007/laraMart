<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductPricing
 * @package App\Models\Backend
 * @version February 17, 2018, 9:57 am UTC
 *
 * @property integer product_id
 * @property float buying_price
 * @property float selling_price
 */
class ProductPricing extends Model
{
    use SoftDeletes;

    public $table = 'product_pricings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'buying_price',
        'selling_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'buying_price' => 'float',
        'selling_price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
