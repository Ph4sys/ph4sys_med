<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    
    protected $table = "estados_civis";

    public function pacientes()
    {
    	return $this->hasMany('App\Paciente','paciente_id');
    }
}
