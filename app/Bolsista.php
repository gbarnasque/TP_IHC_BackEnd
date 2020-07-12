<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orientador;

class Bolsista extends Model
{
    protected $table =  'bolsistas';

    public static function insertBolsista($nome, $email, $senha, $orientadorNome){
        if(Bolsista::getByEmail($email)){
            return false;
        }
        $orientadorDummy = Orientador::getByNome($orientadorNome);
        if($orientadorDummy == null){
            return false;
        }

        $bolsistaDummy = new Bolsista;
        $bolsistaDummy->nome = $nome;
        $bolsistaDummy->email = $email;
        $bolsistaDummy->senha = $senha;
        $bolsistaDummy->orientador_id = $orientadorDummy->id;
        $bolsistaDummy->save();
        return true;
        
    }

    public static function deleteById($id){
        $bolsistaDummy = Bolsista::find($id);
        if($bolsistaDummy == null){
            return false;
        }

        $bolsistaDummy->delete();
        return true;
    }

    public static function getByEmail($email){
        return Bolsista::where('email', '=', $email)->first();
    }

    public static function getByNome($nome){
        return Bolsista::where('nome', '=', $nome)->first();
    }
    public static function getIdByNome($nome){
        return Bolsista::getByNome($nome)->id;
    }
}
