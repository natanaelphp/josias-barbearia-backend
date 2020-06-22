<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index(UserRepository $userRepository)
    {
        return $userRepository->getAll();
    }
}
