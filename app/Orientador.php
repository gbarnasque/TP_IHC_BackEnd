<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    protected $table =  'orientadores';

    public function insertOrientador($nome, $email){
        if(Orientador::getByEmail($email)){
            return false;
        }
        $this->nome = $nome;
        $this->email = $email;
        $this->save();
        return true;
      
    }

    public function deleteById($id){
        $orientadorDummy = $this->find($id);
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
