<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function status()
    {
        return $this->belongsTo('App\StatusPaciente','status_id');
    }

    public function profissao()
    {
        return $this->belongsTo('App\Profissao','profissao_id');
    }
    
    public function classePaciente()
    {
        return $this->belongsTo('App\ClassePaciente');
    }
   
    public function cidade()
    {
        return $this->belongsTo('App\Cidade','cidade_id');
    }

    public function sexo()
    {
        return $this->belongsTo('App\Sexo','sexo_id');
    }

    public function bairro()
    {
        return $this->belongsTo('App\Bairro','bairro_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado','estado_id');
    }

    public function estadoCivil()
    {
        return $this->belongsTo('App\EstadoCivil','estado_civil_id');
    }
}
