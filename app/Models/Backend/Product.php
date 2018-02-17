<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models\Backend
 * @version February 17, 2018, 9:31 am UTC
 *
 * @property string title
 * @property string code
 * @property string barcode
 * @property string barcode_path
 * @property string thubmnail
 * @property integer category_id
 * @property integer subcategory_id
 * @property string description
 * @property smallinteger status
 * @property integer branch_id
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'code' => 'string',
        'barcode' => 'string',
        'barcode_path' => 'string',
        'thubmnail' => 'string',
        'category_id' => 'integer',
        'subcategory_id' => 'integer',
        'description' => 'string',
        'branch_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'code' => 'required',
        'thubmnail' => 'required'
    ];

    
}
