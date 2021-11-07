<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Funcionario;
use App\User;

class GerenciadorController extends Controller
{
    public function index(){
        $gerenciador = User::where('id',1)->get()->first();
        if($gerenciador->email == $_SESSION['email']){
            return view('gerenciador');
        }else{
            return redirect()->back();
        }
        
    }

    public function cadastrar(Request $request){
        $nome  = $request->get('nomeContribuinte');
        $email = $request->get('email');
        $senha = $request->get('senha');
        $check = $request->get('checkSenha');

        if($senha == $check){
            $novoContribuente = new Funcionario;
            $existe = $novoContribuente->where('email',$email);
            if($existe == ''){
                $senha = Hash::make($senha);
                $novoContribuente-> nome = $nome;
                $novoContribuente-> email = $email;
                $novoContribuente-> senha = $senha;
                $novoContribuente->save();

                return redirect()->route('home');
            }
        }

        return redirect()->back();
        

        

    }
}
