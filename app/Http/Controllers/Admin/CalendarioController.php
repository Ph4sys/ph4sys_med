<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Agendamento;
use App\Auth;

class CalendarioController extends Controller
{
	
	public function index(){

		$data = array(); //declaramos un array principal que va contener los datos
        $id = Agendamento::all()->lists('id'); //listamos todos los id de los eventos
        $titulo = Agendamento::all()->lists('titulo'); //lo mismo para lugar y fecha
        $fechaIni = Agendamento::all()->lists('inicio_evento');
        $fechaFin = Agendamento::all()->lists('termino_evento');
        $allDay = Agendamento::all()->lists('diatodo');
        $background = Agendamento::all()->lists('color');
        //$borde = Agendamento::all()->lists('borde');
        $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos
 
        //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for($i=0;$i<$count;$i++){
            $data[$i] = array(
                "title"=>$titulo[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
                "start"=>$fechaIni[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
                "end"=>$fechaFin[$i],
                "allDay"=>$allDay[$i],
                "backgroundColor"=>$background[$i],
                //"borderColor"=>$borde[$i],
                "id"=>$id[$i]
                //"url"=>"cargaEventos".$id[$i]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }

        json_encode($data); //convertimos el array principal $data a un objeto Json 
       return $data; //para luego retornarlo y estar listo para consumirlo
	}

    public function create(){

    	//Valores recibidos via ajax
        $title = $_POST['title'];
        $start = $_POST['start'];
        $back = $_POST['background'];

        //Insertando evento a base de datos
        $agendamento = new Agendamento;
        $agendamento->inicio_evento=$start;
        //$agendamento->fechaFin=$end;
        $agendamento->diatodo=true;
       // $agendamento->usuario= auth()->user()->nome;
        $agendamento->paciente_id='1';
        $agendamento->color=$back;
        $agendamento->titulo=$title;

	//dd($agendamento);

      $agendamento->save();
    }

    public function update(){
        //Valores recibidos via ajax
        $id = $_POST['id'];
        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $allDay = $_POST['allday'];
        $back = $_POST['background'];

        $evento=Agendamento::find($id);
        if($end=='NULL'){
            $evento->termino_evento=NULL;
        }else{
            $evento->termino_evento=$end;
        }
        $evento->inicio_evento=$start;
        $evento->diatodo=$allDay;
        $evento->color=$back;
        $evento->titulo=$title;
        //$evento->fechaFin=$end;

        $evento->save();
   }

    public function delete(){
        //Valor id recibidos via ajax
        $id = $_POST['id'];
        Agendamento::destroy($id);
   }
}
