<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Bolsista;
use App\Orientador;
use App\Retorno;

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


/*
** Section: Orientador
*/

Route::middleware('api')->put('/orientador/insere', function (Request $request) {
    $orientador = new Orientador;
    $ret = new Retorno;
    $ret->sucesso = $orientador->insertOrientador($request->input('nome'), $request->input('email'));
    $ret->mensagem = 'Orientador cadastrado com sucesso.';

    if(!$ret->sucesso)
    {
        $ret->mensagem = 'Não foi possível cadastrar o orientador.';
    }

    return response()->json((array) $ret);
});

Route::middleware('api')->delete('/orientador/remove', function (Request $request) {
    $orientador = new Orientador;
    $ret = new Retorno;
    $ret->sucesso = $orientador->deleteById($request->input('id'));
    $ret->mensagem = 'Orientador removido com sucesso.';

    if(!$ret->sucesso){
        $ret->mensagem = 'Não foi possível remover o orientador.';
    }

    return response()->json((array) $ret);
});

Route::middleware('api')->get('/orientador/todos', function (Request $request) {
    return response()->json(Orientador::all());
});



Route::middleware('api')->put('/bolsista/insere', function (Request $request) {
    $bolsista = new Bolsista;
    $ret = new Retorno;
    $ret->sucesso = $bolsista->insertBolsista($request->input('nome'), $request->input('email'), $request->input('senha'), $request->input('orientador'));
    $ret->mensagem = 'Bolsista cadastrado com sucesso.';

    if(!$ret->sucesso)
    {
        $ret->mensagem = 'Não foi possível cadastrar o bolsista.';
    }

    return response()->json((array) $ret);
});

Route::middleware('api')->delete('/bolsista/remove', function (Request $request) {
    $bolsista = new Bolsista;
    $ret = new Retorno;
    $ret->sucesso = $bolsista->deleteById($request->input('id'));
    $ret->mensagem = 'Bolsista removido com sucesso.';

    if(!$ret->sucesso){
        $ret->mensagem = 'Não foi possível remover o bolsista.';
    }

    return response()->json((array) $ret);
});

Route::middleware('api')->get('/bolsista/todos', function (Request $request) {
    return response()->json(Bolsista::all());
});