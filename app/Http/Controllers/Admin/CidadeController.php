<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cidade;
use App\Cliente;

class CidadeController extends Controller
{
    public function index()
    {
        $registros = Cidade::orderBy('nome')->paginate(10);
        return view('admin.cidades.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.cidades.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Cidade();
        $registro->nome = $dados['nome'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.cidades');
        
    }

    public function editar($id)
    {
        $registro = Cidade::find($id);
        return view('admin.cidades.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Cidade::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.cidades');
    }

    public function deletar($id)
    {
        if(Cliente::where('cidade_id','=',$id)->count()){
            
            $msg = "Não é possível deletar essa cidade! Esses clientes (";
            $clientes = Cliente::where('cidade_id','=',$id)->get();

            foreach ($clientes as $cliente) {
                $msg .= "id:".$cliente->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'alert alert-danger alert-dismissible']);
            return redirect()->route('admin.cidades');
        }

        Cidade::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.cidades');

    }
}
