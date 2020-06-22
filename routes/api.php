<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->post('login', 'AuthController@login');

$router->middleware('auth:api')->group(function ($router) {
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->get('me', 'AuthController@me');

    $router->get('users', 'UserController@index');
    $router->get('services', 'ServiceController@index');

    $router->apiResource('clients', 'ClientController');
    $router->apiResource('appointments', 'AppointmentController');
});
