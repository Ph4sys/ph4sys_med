<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home', function(){
	return view('home');
}]);


Route::get('/admin/login',['as'=>'admin.login', function(){
	return view('admin.login.index');
}]);

Route::post('/admin/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);


Route::group(['middleware'=>'auth'], function(){

	Route::get('/admin/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

	Route::get('/admin',['as'=>'admin.principal', function(){
		return view('admin.principal.index');
	}]);

	Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);
	Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
	Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);
	Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
	Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
	Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);


	Route::get('/admin/classes',['as'=>'admin.classes', 'uses'=>'Admin\ClassePacienteController@index']);
	Route::get('/admin/classes/adicionar',['as'=>'admin.classes.adicionar', 'uses'=>'Admin\ClassePacienteController@adicionar']);
	Route::post('/admin/classes/salvar',['as'=>'admin.classes.salvar', 'uses'=>'Admin\ClassePacienteController@salvar']);
	Route::get('/admin/classes/editar/{id}',['as'=>'admin.classes.editar', 'uses'=>'Admin\ClassePacienteController@editar']);
	Route::put('/admin/classes/atualizar/{id}',['as'=>'admin.classes.atualizar', 'uses'=>'Admin\ClassePacienteController@atualizar']);
	Route::get('/admin/classes/deletar/{id}',['as'=>'admin.classes.deletar', 'uses'=>'Admin\ClassePacienteController@deletar']);

	Route::get('/admin/status',['as'=>'admin.status', 'uses'=>'Admin\StatusPacienteController@index']);
	Route::get('/admin/status/adicionar',['as'=>'admin.status.adicionar', 'uses'=>'Admin\StatusPacienteController@adicionar']);
	Route::post('/admin/status/salvar',['as'=>'admin.status.salvar', 'uses'=>'Admin\StatusPacienteController@salvar']);
	Route::get('/admin/status/editar/{id}',['as'=>'admin.status.editar', 'uses'=>'Admin\StatusPacienteController@editar']);
	Route::put('/admin/status/atualizar/{id}',['as'=>'admin.status.atualizar', 'uses'=>'Admin\StatusPacienteController@atualizar']);
	Route::get('/admin/status/deletar/{id}',['as'=>'admin.status.deletar', 'uses'=>'Admin\StatusPacienteController@deletar']);

	Route::get('/admin/cidades',['as'=>'admin.cidades', 'uses'=>'Admin\CidadeController@index']);
	Route::get('/admin/cidades/adicionar',['as'=>'admin.cidades.adicionar', 'uses'=>'Admin\CidadeController@adicionar']);
	Route::post('/admin/cidades/salvar',['as'=>'admin.cidades.salvar', 'uses'=>'Admin\CidadeController@salvar']);
	Route::get('/admin/cidades/editar/{id}',['as'=>'admin.cidades.editar', 'uses'=>'Admin\CidadeController@editar']);
	Route::put('/admin/cidades/atualizar/{id}',['as'=>'admin.cidades.atualizar', 'uses'=>'Admin\CidadeController@atualizar']);
	Route::get('/admin/cidades/deletar/{id}',['as'=>'admin.cidades.deletar', 'uses'=>'Admin\CidadeController@deletar']);

	Route::get('/admin/bairros',['as'=>'admin.bairros', 'uses'=>'Admin\BairroController@index']);
	Route::get('/admin/bairros/adicionar',['as'=>'admin.bairros.adicionar', 'uses'=>'Admin\BairroController@adicionar']);
	Route::post('/admin/bairros/salvar',['as'=>'admin.bairros.salvar', 'uses'=>'Admin\BairroController@salvar']);
	Route::get('/admin/bairros/editar/{id}',['as'=>'admin.bairros.editar', 'uses'=>'Admin\BairroController@editar']);
	Route::put('/admin/bairros/atualizar/{id}',['as'=>'admin.bairros.atualizar', 'uses'=>'Admin\BairroController@atualizar']);
	Route::get('/admin/bairros/deletar/{id}',['as'=>'admin.bairros.deletar', 'uses'=>'Admin\BairroController@deletar']);

	Route::get('/admin/estados',['as'=>'admin.estados', 'uses'=>'Admin\EstadoController@index']);
	Route::get('/admin/estados/adicionar',['as'=>'admin.estados.adicionar', 'uses'=>'Admin\EstadoController@adicionar']);
	Route::post('/admin/estados/salvar',['as'=>'admin.estados.salvar', 'uses'=>'Admin\EstadoController@salvar']);
	Route::get('/admin/estados/editar/{id}',['as'=>'admin.estados.editar', 'uses'=>'Admin\EstadoController@editar']);
	Route::put('/admin/estados/atualizar/{id}',['as'=>'admin.estados.atualizar', 'uses'=>'Admin\EstadoController@atualizar']);
	Route::get('/admin/estados/deletar/{id}',['as'=>'admin.estados.deletar', 'uses'=>'Admin\EstadoController@deletar']);

	Route::get('/admin/convenios',['as'=>'admin.convenios', 'uses'=>'Admin\ConvenioController@index']);
	Route::get('/admin/convenios/adicionar',['as'=>'admin.convenios.adicionar', 'uses'=>'Admin\ConvenioController@adicionar']);
	Route::post('/admin/convenios/salvar',['as'=>'admin.convenios.salvar', 'uses'=>'Admin\ConvenioController@salvar']);
	Route::get('/admin/convenios/editar/{id}',['as'=>'admin.convenios.editar', 'uses'=>'Admin\ConvenioController@editar']);
	Route::put('/admin/convenios/atualizar/{id}',['as'=>'admin.convenios.atualizar', 'uses'=>'Admin\ConvenioController@atualizar']);
	Route::get('/admin/convenios/deletar/{id}',['as'=>'admin.convenios.deletar', 'uses'=>'Admin\ConvenioController@deletar']);

	Route::get('/admin/profissoes',['as'=>'admin.profissoes', 'uses'=>'Admin\ProfissaoController@index']);
	Route::get('/admin/profissoes/adicionar',['as'=>'admin.profissoes.adicionar', 'uses'=>'Admin\ProfissaoController@adicionar']);
	Route::post('/admin/profissoes/salvar',['as'=>'admin.profissoes.salvar', 'uses'=>'Admin\ProfissaoController@salvar']);
	Route::get('/admin/profissoes/editar/{id}',['as'=>'admin.profissoes.editar', 'uses'=>'Admin\ProfissaoController@editar']);
	Route::put('/admin/profissoes/atualizar/{id}',['as'=>'admin.profissoes.atualizar', 'uses'=>'Admin\ProfissaoController@atualizar']);
	Route::get('/admin/profissoes/deletar/{id}',['as'=>'admin.profissoes.deletar', 'uses'=>'Admin\ProfissaoController@deletar']);
	
	Route::get('/admin/pacientes/deletar/{id}',['as'=>'admin.pacientes.deletar', 'uses'=>'Admin\PacienteController@deletar']);
	Route::get('/admin/pacientes',['as'=>'admin.pacientes', 'uses'=>'Admin\PacienteController@index']);
	Route::get('/admin/pacientes/adicionar',['as'=>'admin.pacientes.adicionar', 'uses'=>'Admin\PacienteController@adicionar']);
	Route::post('/admin/pacientes/salvar',['as'=>'admin.pacientes.salvar', 'uses'=>'Admin\PacienteController@salvar']);
	Route::get('/admin/pacientes/editar/{id}',['as'=>'admin.pacientes.editar', 'uses'=>'Admin\PacienteController@editar']);
	Route::put('/admin/pacientes/atualizar/{id}',['as'=>'admin.pacientes.atualizar', 'uses'=>'Admin\PacienteController@atualizar']);
	Route::get('/admin/pacientes/deletar/{id}',['as'=>'admin.pacientes.deletar', 'uses'=>'Admin\PacienteController@deletar']);
	Route::get('/admin/pacientes/detalhe/{id}',['as'=>'admin.pacientes.detalhe', 'uses'=>'Admin\PacienteController@detalhe']);
	
	Route::get('/admin/pacientes/agendar/{id?}',['as'=>'admin.pacientes.agendar', 'uses'=>'Admin\PacienteController@agendar']);
	

	//Route::post('/admin/agendamento/salvarEventos','Admin\CalendarioController@create');

	Route::post('salvarEventos', array('as' => 'salvarEventos','uses' => 'Admin\CalendarioController@create'));
	Route::post('atualizarEventos', array('as' => 'atualizarEventos','uses' => 'Admin\CalendarioController@update'));

	Route::post('eliminarEvento', array('as' => 'eliminarEvento','uses' => 'Admin\CalendarioController@delete'));

	Route::get('/admin/pacientes/carregarEventos','Admin\CalendarioController@index');



	//Route::post('admin/agendamento/salvarEventos',['as'=>'admin.agendamento.salvarEventos', 'uses'=>'Admin\CalendarioController@create']);
});

