<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    protected $table =  'orientadores';

    public static function insertOrientador($nome, $email){
        if(Orientador::getByEmail($email)){
            return false;
        }
        $orientadorDummy = new Orientador;
        $orientadorDummy->nome = $nome;
        $orientadorDummy->email = $email;
        $orientadorDummy->save();
        return true;
      
    }

    public static function deleteById($id){
        $orientadorDummy = Orientador::find($id);
        if($orientadorDummy == null){
            return false;
        }

        $orientadorDummy->delete();
        return true;
    }

    public static function getByEmail($email){
        return Orientador::where('email', '=', $email)->first();
    }
    
    public static function getByNome($nome){
        return Orientador::where('nome', '=', $nome)->first();
    }
}
