<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ClassePaciente;
use App\User;
use Auth;

class ClassePacienteController extends Controller
{
    public function index()
    {
        $registros = ClassePaciente::orderBy('nome')->paginate(10);
        return view('admin.classes.index',compact('registros'));
    }
 
    public function adicionar()
    {
        
        return view('admin.classes.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new ClassePaciente();
        $registro->nome = $dados['nome'];

        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.classes');
        
    }

    public function editar($id)
    {
        $registro = ClassePaciente::find($id);
        return view('admin.classes.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = ClassePaciente::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.classes');
    }

    public function deletar($id)
    {
        ClassePaciente::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.classes');

    }
}
