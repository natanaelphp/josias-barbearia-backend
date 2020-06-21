<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository extends AbstractRepository
{
    public function __construct(Client $client)
    {
        $this->model = $client;
    }
}
