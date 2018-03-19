<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StatusPaciente;

class StatusPacienteController extends Controller
{
   public function index()
    {
        $registros = StatusPaciente::orderBy('nome')->paginate(10);
        return view('admin.status.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.status.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new StatusPaciente();
        $registro->nome = $dados['nome'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.status');
        
    }

    public function editar($id)
    {
        $registro = StatusPaciente::find($id);
        return view('admin.status.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = StatusPaciente::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.status');
    }

    public function deletar($id)
    {
        StatusPaciente::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.status');

    }
}
