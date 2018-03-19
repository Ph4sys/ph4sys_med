<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
   
  	public function pacientes()
	{
		return $this->hasMany('App\Paciente','convenio_id');
	}
}
