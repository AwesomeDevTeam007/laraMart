<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductInventory
 * @package App\Models\Backend
 * @version February 17, 2018, 10:09 am UTC
 *
 * @property integer product_id
 * @property integer instock_qty
 * @property integer notify_qty
 * @property integer branch_id
 */
class ProductInventory extends Model
{
    use SoftDeletes;

    public $table = 'product_inventories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'instock_qty',
        'notify_qty',
        'branch_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'instock_qty' => 'integer',
        'notify_qty' => 'integer',
        'branch_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'instock_qty' => 'required'
    ];

    
}
