<?php

namespace App\Repositories;

use App\Models\Serviceproduct;
use InfyOm\Generator\Common\BaseRepository;

class ServiceproductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'service_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Serviceproduct::class;
    }
}
