<?php

namespace App\Http\Controllers;

use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    public function index(ServiceRepository $serviceRepository)
    {
        return $serviceRepository->getAll();
    }
}
