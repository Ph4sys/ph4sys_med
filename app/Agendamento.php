<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'Agendamentos';

    protected $fillable = ['id','paciente_id','inicio_evento','termino_evento', 'color', 'diatodo', 'usuario'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente', 'paciente_id');
    }
}
