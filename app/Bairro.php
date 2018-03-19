<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
	public function clientes()
    {
    	return $this->hasMany('App\Cliente','bairro_id');
    }

    public function transportadoras()
    {
    	return $this->hasMany('App\Transportadora','bairro');
    }
}
