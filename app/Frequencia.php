<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    protected $table =  'frequencias';

    public static function insertFrequencia($bolsista, $observacao = '', $data){
        $bolsistaDummy = Bolsista::getByNome($bolsista);
        if($bolsistaDummy == null){
            return false;
        }

        $frequenciaDummy = new Frequencia;
        $frequenciaDummy->data = $data;
        $frequenciaDummy->bolsista_id = $bolsistaDummy->id;
        $frequenciaDummy->observacao = $observacao;
        $frequenciaDummy->save();
        return true;
        
    }

    public static function checkFrequenciaExistenteNoDia($bolsista){

        $dataAtual = getdate();
        $ultimaData = date_parse(Frequencia::getUltimaFrequenciaPorBolsistaNome($bolsista)['data']);

        return $ultimaData['year'] == $dataAtual['year']
                && $ultimaData['month'] == $dataAtual['mon']
                && $ultimaData['day'] == $dataAtual['mday'];;
    }

    public static function getFrequenciasPorBolsistaNome($bolsista){
        return Frequencia::where('bolsista_id', '=', Bolsista::getIdByNome($bolsista))->orderby('data', 'desc');
    }

    public static function getUltimaFrequenciaPorBolsistaNome($bolsista){
        return Frequencia::getFrequenciasPorBolsistaNome($bolsista)->first();
    }
}
