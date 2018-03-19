<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DateTime;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\ClassePaciente;
use App\Bairro;
use App\Cidade;
use App\Estado;
use App\StatusPaciente;
use App\Sexo;
use App\Profissao;
use App\EstadoCivil;
use Auth;
use App\User;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::orderBy('nome')->paginate(10);
        //$pacientes = Paciente::all();

        //dd($pacientes[0]->cidade->nome);
        
        return view('admin.pacientes.index',compact('pacientes'));
    }
 
    public function detalhe($id)
    {
        $paciente = Paciente::find($id);

        return view('admin.pacientes.detalhe', compact('paciente'));

    }

    public function agendar($id = null)
    {
        if($id != null){
            
            $paciente = Paciente::find($id);
        }
        else{
            
            $paciente = new Paciente();
        }

        return view('admin.pacientes.agendar', compact('paciente'));
    }
    
    public function adicionar()
    {
        $classes = ClassePaciente::all();
        $bairros = Bairro::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $status = StatusPaciente::all();
        $sexos = Sexo::all();
        $estados_civis = EstadoCivil::all();
        $profissoes = Profissao::orderBy('id')->get();

        //dd(auth()->user()->name);
       
        return view('admin.pacientes.adicionar', compact('classes','status','bairros','cidades','estados','sexos','profissoes', 'estados_civis'));
    }
    
    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Paciente();
        $registro->nome = $dados['nome'];
        $registro->nome_social = $dados['nome_social'];
        $registro->email = $dados['email'];
        $registro->rg = $dados['rg'];
        $registro->cpf = $dados['cpf'];
        $registro->telefone = $dados['telefone'];
        $registro->celular = $dados['celular'];
        $registro->celular_2 = $dados['celular_2'];
        
        $registro->nome_contato = $dados['nome_contato'];
        $registro->tel_contato = $dados['tel_contato'];
        $registro->nascimento = $dados['nascimento'];
        $registro->responsavel = $dados['responsavel'];
        
        $registro->sexo_id = $dados['sexo_id'];
        $registro->profissao_id = $dados['profissao_id'];
        $registro->classe_paciente_id = $dados['classe_id'];
        $registro->status_id = $dados['status_id'];
        /*
        $file = $request->file('foto');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/pacientes/".str_slug($dados['nome'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->foto = $diretorio.'/'.$nomeArquivo;
        }*/

        $registro->cep = $dados['cep'];
        $registro->endereco = $dados['endereco'];
        $registro->numero = $dados['numero'];
        $registro->complemento = $dados['complemento'];
        $registro->estado_civil_id = $dados['estado_civil_id'];
        $registro->bairro_id = $dados['bairro_id'];
        $registro->cidade_id = $dados['cidade_id'];
        $registro->estado_id = $dados['estado_id'];
        $registro->usuario = Auth::user()->name;

        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.pacientes');
    }

    public function editar($id)
    {
        $registro = Paciente::find($id);
        $data = new DateTime($registro->nascimento);
        //echo($registro->nascimento);
        $registro->nascimento= $data->format('Y-m-d');
        //dd($registro->nascimento);
        $status = StatusPaciente::all();
        $classes = ClassePaciente::all();
        $bairros = Bairro::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $sexos = Sexo::all();
        $profissoes = Profissao::all();
        $estados_civis = EstadoCivil::all();
        
        return view('admin.pacientes.editar', compact('registro', 'status', 'classes', 'bairros', 'cidades', 'estados', 'sexos', 'profissoes', 'estados_civis'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Paciente::find($id);
        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->nome_social = $dados['nome_social'];
        $registro->email = $dados['email'];
        $registro->rg = $dados['rg'];
        $registro->cpf = $dados['cpf'];
        $registro->telefone = $dados['telefone'];
        $registro->celular = $dados['celular'];
        $registro->celular_2 = $dados['celular_2'];
        
        $registro->nome_contato = $dados['nome_contato'];
        $registro->tel_contato = $dados['tel_contato'];
        $data= new DateTime($dados['nascimento']);
        //dd($data);
        //$data_formatada= $data->format('d/m/Y');
        $registro->nascimento= $data;
        //dd($registro->nascimento);
        $registro->responsavel = $dados['responsavel'];
        
        $registro->sexo_id = $dados['sexo_id'];
        $registro->profissao_id = $dados['profissao_id'];
        $registro->classe_paciente_id = $dados['classe_id'];
        $registro->status_id = $dados['status_id'];
        
/*
        $file = $request->file('foto');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/imoveis/".str_slug($dados['nome'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->foto = $diretorio.'/'.$nomeArquivo;
        }

        $foto= $dados['foto'];
        $ext = $foto->guessClientExtension();
        $nomeArquivo = "_img_".$rand.".".$ext;
        $foto->move($diretorio,$nomeArquivo);
        $registro->foto = $diretorio.'/'.$nomeArquivo; */

        $registro->cep = $dados['cep'];
        $registro->endereco = $dados['endereco'];
        $registro->numero = $dados['numero'];
        $registro->complemento = $dados['complemento'];
        $registro->estado_civil_id = $dados['estado_civil_id'];
        $registro->bairro_id = $dados['bairro_id'];
        $registro->cidade_id = $dados['cidade_id'];
        $registro->estado_id = $dados['estado_id'];
        $registro->usuario = Auth::user()->name;

        //dd($registro->numero);
        
        $data = new DateTime($dados['nascimento']);

        //dd($data->format("m/d/Y"));
        //dd($registro->nascimento);

        $registro->update();

        //dd($request->item_desc[0]);
        //$cotacao->itensCotacao()->saveMany($request->all());
        //$cotacao->itensCotacao->update($request->all());

        \Session::flash('mensagem',['msg'=>'Pedido atualizada com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.pacientes');
    }
}
