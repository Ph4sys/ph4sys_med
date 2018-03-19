<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estado;
use App\Cliente;

class EstadoController extends Controller
{
     public function index()
    {
        $registros = Estado::orderBy('nome')->paginate(15);
        return view('admin.estados.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.estados.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Estado();
        $registro->nome = $dados['nome'];
        $registro->sigla = $dados['sigla'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.estados');
        
    }

    public function editar($id)
    {
        $registro = Estado::find($id);
        return view('admin.estados.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Estado::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
		$registro->sigla = $dados['sigla'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.estados');
    }

    public function deletar($id)
    {
        
        if(Cliente::where('estado_id','=',$id)->count()){
            
            $msg = "Não é possível deletar essa estado! Esses clientes (";
            $clientes = Cliente::where('estado_id','=',$id)->get();

            foreach ($clientes as $cliente) {
                $msg .= "id:".$cliente->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'alert alert-success alert-dismissible']);
            return redirect()->route('admin.estados');
        }


        Estado::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.estados');

    }
}
