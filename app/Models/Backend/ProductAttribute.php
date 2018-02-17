<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductAttribute
 * @package App\Models\Backend
 * @version February 17, 2018, 10:06 am UTC
 *
 * @property integer product_id
 * @property string key
 * @property string value
 */
class ProductAttribute extends Model
{
    use SoftDeletes;

    public $table = 'product_attributes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'key' => 'required'
    ];

    
}
