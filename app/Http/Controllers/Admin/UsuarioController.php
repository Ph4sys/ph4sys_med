<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UsuarioController extends Controller
{
   Public function login(Request $request)
   {
   		$dados = $request->all();

   		if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
    		\Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'alert alert-success alert-dismissible']);
    		return redirect()->route('admin.principal');
    	}
		
		\Session::flash('mensagem',['msg'=>'Erro! confira seus dados!','class'=>'alert alert-danger alert-dismissible']);
    	   	
    	return redirect()->route('admin.login');
   }

   Public function Sair()
   {
        Auth::logout();
        return redirect()->route('admin.login');
   }

   public function index()
    {
        $usuarios = User::orderBy('name')->paginate(10);
        return view('admin.usuarios.index',compact('usuarios'));
    }
 
    public function adicionar()
    {
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.usuarios');
        
    }

    public function editar($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {
        $usuario = User::find($id);
        $dados = $request->all();
        
        if(isset($dados['password']) && strlen($dados['password']) > 5 )
        {
            $dados['password'] = bcrypt($dados['password']);
        }else
        {
            unset($dados['password']);
        }

        $usuario->update($dados);
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success alert-dismissible']);

        return redirect()->route('admin.usuarios');
    }

    public function deletar($id)
    {
        User::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success alert-dismissible']);
        return redirect()->route('admin.usuarios');

    }
}
