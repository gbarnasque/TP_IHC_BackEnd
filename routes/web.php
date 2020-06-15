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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/home', 'HomeController@show')->name('home');

Route::get('/presences', 'PresenceController@index')->name('presences');
Route::post('/presence/create', 'PresenceController@store')->name('storePresence');

Route::get('/teste', function () {
    $arr = ['message' => 'oi eu sou o gustavo!'];
    return response()->json($arr);
});
