<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassePaciente extends Model
{

	protected $table = "classes_paciente";
    
	public function pacientes()
    {
        return $this->hasMany('App\Paciente');
    }

    public function classe()
    {
    	return $this->belongsTo('App\ClassePaciente');
    }

     public function estado_civil()
    {
        return $this->belongsTo('App\ClassePaciente');
    }

    public function cidade()
    {
    	return $this->belongsTo('App\Cidade');
    }

    public function bairro()
    {
    	return $this->belongsTo('App\Bairro');
    }

 	public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }
}
