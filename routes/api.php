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

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');

Route::post('frequencies', 'Api\FrequencyController@index');
Route::post('frequencies/store', 'Api\FrequencyController@store');

Route::post('details', 'Api\UserController@details');

Route::group(['middleware' => 'auth:api'], function(){

});
