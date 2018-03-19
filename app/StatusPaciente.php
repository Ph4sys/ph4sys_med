<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPaciente extends Model
{
    protected $table = "status_paciente";

    public function pacientes()
    {
    	return $this->hasMany('App\Paciente', 'status_id');
    }
}
