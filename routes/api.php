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
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");


Route::middleware('api')->get('/gradebooks', 'GradebooksController@index');
Route::middleware('api')->post('/gradebooks', 'GradebooksController@store');
Route::middleware('api')->get('/professors', 'ProfessorsController@index');
Route::middleware('api')->post('/professors', 'ProfessorsController@store');
Route::middleware('api')->get('/gradebooks/{id}', 'GradebooksController@show');
Route::middleware('api')->get('/professors/{id}', 'ProfessorsController@show');



