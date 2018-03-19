<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bairro;

class BairroController extends Controller
{
    public function index()
    {
        $registros = Bairro::orderBy('nome')->paginate(10);
        return view('admin.bairros.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.bairros.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Bairro();
        $registro->nome = $dados['nome'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.bairros');
        
    }

    public function editar($id)
    {
        $registro = Bairro::find($id);
        return view('admin.bairros.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Bairro::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.bairros');
    }

    public function deletar($id)
    {
        Bairro::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.bairros');

    }
}
