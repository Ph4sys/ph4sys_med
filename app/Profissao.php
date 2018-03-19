<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    protected $table = "profissoes";

    public function pacientes()
    {
    	return $this->hasMany('App\Paciente','profissao_id');
    }
}
