<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Funcionario;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'E-mail e/ou senha inválidos';
        }
        if($request->get('erro') == 2){
            $erro = 'Necessário autenticação';
        }
        return view('login',['erro'=>$erro]);
    }



    public function autenticar(Request $request){
        //Validação
        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];
        $retorno =[
            'required' => 'Você esqueceu de me preencher! (Campo :attribute)',
            'email.email' => 'Digite um email válido!'
        ];
        $request->validate($regras,$retorno);

        //Recuperando os paramêtros
        $email = $request->get('email');
        $senha = $request->get('password');

        //Consultando no DB
        $user = new User();
        $usuario = $user->where('email',$email)->get()->first();
        if($usuario != '' || $usuario != null){
            if (Hash::check($senha, $usuario->senha)) {
                if(isset($usuario->nome)){

                    session_start();
                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['nome'] = $usuario->nome;
                    $_SESSION['email'] = $usuario->email;
        
                    return redirect()->route('home');
        
                }
            }
        }


        //Consultando no DB
        $user = new Funcionario();
        $usuario = $user->where('email',$email)->get()->first();
        if($usuario != '' || $usuario != null){
            if (Hash::check($senha, $usuario->senha)) {
                if(isset($usuario->nome)){

                    session_start();
                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['nome'] = $usuario->nome;
                    $_SESSION['email'] = $usuario->email;
        
                    return redirect()->route('home');
        
                }
            }
        }


        return redirect()->route('login',['erro'=>1]);

    }



    public function sair(){
        session_destroy();
        return redirect()->route('login');
    }
}
