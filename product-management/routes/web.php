<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'products'], function () use ($router) {
    $router->get('{productId}', function ($productId) {
        return response()->json([
            "id"=> $productId,
            "name"=> "Sepatu",
            "warna"=> "Putih",
            "ukuran"=> "42"
        ]);
    });
    $router->put('{productId}', function ($productId) {
        return response()->json([
            "id"=> $productId,
            "msg"=> "Berhasil update data"
        ]);
    });
    $router->get('', function () {
        return response()->json([
            [
                "id"=> 1,
                "name"=> "Sepatu",
                "warna"=> "Putih",
                "ukuran"=> "42"
            ],
            [
                "id"=> 1,
                "name"=> "Sepatu",
                "warna"=> "Putih",
                "ukuran"=> "42"
            ],
            [
                "id"=> 1,
                "name"=> "Sepatu",
                "warna"=> "Putih",
                "ukuran"=> "42"
            ],
            [
                "id"=> 1,
                "name"=> "Sepatu",
                "warna"=> "Putih",
                "ukuran"=> "42"
            ],
            [
                "id"=> 1,
                "name"=> "Sepatu",
                "warna"=> "Putih",
                "ukuran"=> "42"
            ]
        ]);
    });
});
