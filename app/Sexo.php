<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    public function pacientes()
    {
    	return $this->hasMany('App\Paciente','sexo_id');
    }
}
