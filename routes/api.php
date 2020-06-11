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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->post('/user/login', function (Request $request) {
    if($request->input('senha') == "1111"){
        $ret = ['status' => 'H4CK3D', 'message' => 'Usuário logado com sucesso!'];
    }
    else{
        $ret = ['status' => 'OK', 'message' => 'Usuário logado com sucesso!'];
    }
   
    return response()->json($ret);

    //Lógica de validar usuário no banco


    $email = $request->input('email');
    $senha = $request->input('senha');

    $fullUrl = $request->fullUrl();
    $ret = ['email' => $email, 'senha' => $senha];
    return response()->json($ret);
});