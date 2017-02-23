<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vehicle
 * @package App\Models
 * @version February 16, 2017, 7:09 pm UTC
 */
class Vehicle extends Model
{
    use SoftDeletes;

    public $table = 'vehicle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'reg_no',
        'color',
        'vehicle_company',
        'customer_id',
        'model_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reg_no' => 'string',
        'color' => 'integer',
        'vehicle_company' => 'string',
        'customer_id' => 'integer',
        'model_year' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class);
    }
}
