<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convenio;

class ConvenioController extends Controller
{
    public function index()
    {
        $registros = Convenio::orderBy('nome')->paginate(10);
        return view('admin.convenios.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.convenios.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Convenio();
        $registro->nome = $dados['nome'];
        $registro->valor = $dados['valor'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.convenios');
        
    }

    public function editar($id)
    {
        $registro = Convenio::find($id);
        return view('admin.convenios.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Convenio::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
		$registro->valor = $dados['valor'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.convenios');
    }

    public function deletar($id)
    {
        if(Cliente::where('cidade_id','=',$id)->count()){
            
            $msg = "Não é possível deletar essa cidade! Esses clientes (";
            $clientes = Convenio::where('cidade_id','=',$id)->get();

            foreach ($clientes as $cliente) {
                $msg .= "id:".$cliente->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'alert alert-danger alert-dismissible']);
            return redirect()->route('admin.convenios');
        }

        Convenio::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.convenios');

    }
}
