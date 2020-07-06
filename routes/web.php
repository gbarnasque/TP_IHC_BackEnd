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

Route::get('/presences', 'PresenceController@index')->name('presences');
Route::get('/presence/create', 'PresenceController@create')->name('createPresence');
Route::post('/presence/create', 'PresenceController@store')->name('storePresence');

Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/create', 'UserController@create')->name('createUser');
Route::post('/user/create', 'UserController@store')->name('storeUser');
Route::get('/user/{id}/edit', 'UserController@edit')->name('editUser');
Route::put('/user/{id}/edit', 'UserController@update')->name('updateUser');

