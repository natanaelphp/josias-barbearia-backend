<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\AbstractRepository;

class ClientRepository extends AbstractRepository
{
    public function __construct(Client $client)
    {
        $this->model =$client;
    }
}
