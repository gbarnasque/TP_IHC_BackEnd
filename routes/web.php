<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('presences', 'FrequencyController');

Route::resource('users', 'UserController')->except([
    'show'
]);

