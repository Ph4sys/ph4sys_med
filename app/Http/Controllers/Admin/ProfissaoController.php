<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profissao;

class ProfissaoController extends Controller
{
    public function index()
    {
        $registros = Profissao::orderBy('nome')->paginate(10);
        return view('admin.profissoes.index',compact('registros'));
    }
 
    public function adicionar()
    {
        return view('admin.profissoes.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Profissao();
        $registro->nome = $dados['nome'];
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.profissoes');
        
    }

    public function editar($id)
    {
        $registro = Profissao::find($id);
        return view('admin.profissoes.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Profissao::find($id);
        $dados = $request->all();

		$registro->nome = $dados['nome'];
       
        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.profissoes');
    }

    public function deletar($id)
    {
        if(Paciente::where('paciente_id','=', $id)->count()){
            
            $msg = "Não é possível deletar essa profissao! Esses clientes (";
            $pacientes = Paciente::where('paciente_id','=',$id)->get();

            foreach ($pacientes as $paciente) {
                $msg .= "id:".$paciente->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'alert alert-danger alert-dismissible']);
            return redirect()->route('admin.profissoes');
        }

        Profissao::find($id)->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.profissoes');

    }
}
