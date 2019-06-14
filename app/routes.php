<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*header('Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',*/



header('Access-Control-Request-Headers, Origin, Content-Type, X-Auth-Token, Authorization, Accept');

Route::get('/carros', ['uses' => 'CarsController@getAllCars']);

Route::post('/carros', ['uses' => 'CarsController@saveCar']);

Route::get('/carros/{id}', ['uses' => 'CarsController@getCar']);

Route::put('/carros/{id}', ['uses' => 'CarsController@updateCar']);

Route::delete('/carros/{id}', ['uses' => 'CarsController@deleteCar']);


