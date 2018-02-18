<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Branch
 * @package App\Models\Backend
 * @version February 18, 2018, 9:15 am UTC
 *
 * @property string name
 * @property string phone
 * @property string address
 * @property integer manager
 */
class Branch extends Model
{
    use SoftDeletes;

    public $table = 'branches';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'phone',
        'address',
        'manager'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'manager' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
