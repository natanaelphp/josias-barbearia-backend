<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository extends AbstractRepository
{
    public function __construct(Service $service)
    {
        $this->model = $service;
    }
}
