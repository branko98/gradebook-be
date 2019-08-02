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

Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/register', 'Auth\RegisterController@register');
Route::middleware('api')->get('/gradebooks', 'GradebooksController@index');
Route::middleware('jwt')->post('/gradebooks', 'GradebooksController@store');
Route::middleware('jwt')->post('/comments', 'CommentsController@store');
Route::middleware('jwt')->get('/user', 'UsersController@auth');
Route::middleware('jwt')->post('/students', 'StudentsController@store');
Route::middleware('api')->get('/professors', 'ProfessorsController@index');
Route::middleware('jwt')->post('/professors', 'ProfessorsController@store');
Route::middleware('jwt')->put('/gradebooks/{id}', 'GradebooksController@update');
Route::middleware('jwt')->delete('/students/{id}', 'StudentsController@destroy');
Route::middleware('jwt')->delete('/comments/{id}', 'CommentsController@destroy');
Route::middleware('api')->get('/gradebooks/{id}', 'GradebooksController@show');
Route::middleware('jwt')->delete('/gradebooks/{id}', 'GradebooksController@destroy');
Route::middleware('api')->get('/professors/{id}', 'ProfessorsController@show');



