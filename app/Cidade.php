<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cidade extends Model
{
	
	public function pacientes()
    {
    	return $this->hasMany('App\Paciente','cidade_id');
    }
    
}
