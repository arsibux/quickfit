<?php

namespace App\Repositories;

use App\Models\Serviceitem;
use InfyOm\Generator\Common\BaseRepository;

class ServiceitemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'service_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Serviceitem::class;
    }
}
