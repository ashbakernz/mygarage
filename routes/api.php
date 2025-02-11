<?php

use Illuminate\Http\Request;
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

Route::group([

    'middleware' => 'api',
], function ($router) {


    Route::prefix('auth')->group(function () {
        Route::post('login', 'Api\Auth\AuthController@login');
        Route::post('register', 'Api\Auth\AuthController@register');
        Route::post('logout', 'Api\Auth\AuthController@logout');
        Route::post('refresh', 'Api\Auth\AuthController@refresh');
        Route::post('me', 'Api\Auth\AuthController@me');
    });

    Route::resource('vehicles', 'Api\VehicleController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);

    Route::resource('users', 'Api\Auth\UserController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);


});
