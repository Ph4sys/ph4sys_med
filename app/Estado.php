<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
   	public function pacientes()
    {
    	return $this->hasMany('App\Paciente','paciente_id');
    }

}
