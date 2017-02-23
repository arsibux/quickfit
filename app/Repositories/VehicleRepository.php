<?php

namespace App\Repositories;

use App\Models\Vehicle;
use InfyOm\Generator\Common\BaseRepository;

class VehicleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reg_no',
        'color',
        'vehicle_company',
        'customer_id',
        'model_year'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehicle::class;
    }
}
