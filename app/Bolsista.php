<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orientador;

class Bolsista extends Model
{
    protected $table =  'bolsistas';

    public function insertBolsista($nome, $email, $senha, $orientador){
        if(Bolsista::getByEmail($email)){
            return false;
        }

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->orientador_id = Orientador::getByNome($orientador)->id;
        $this->save();
        return true;
        
    }

    public function deleteById($id){
        $bolsistaDummy = $this->find($id);
        if($bolsistaDummy == null){
            return false;
        }

        $bolsistaDummy->delete();
        return true;
    }

    public static function getByEmail($email){
        return Bolsista::where('email', '=', $email)->first();
    }
}
