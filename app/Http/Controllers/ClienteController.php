<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClienteController extends Controller
{
    public function salva(Request $request){
        $nome = $request->get('nome');
        $telefone = $request->get('telefone');

        $novo = new Clientes ();
        $existe = $novo->where('telefone',$telefone)->get()->first();
        if(!isset($existe->id) || $existe->id == ''){
            $novo-> nome     = $nome;
            $novo-> telefone = $telefone;
            $novo->save();

            return true;
        }else{
            return false;
        }
        
        
    }

    public function busca(Request $request){
        $telefone = $request->get('telefone');

        $cliente = Clientes::where(function($query) use ($telefone){
            if($telefone != null){
                $query->where('telefone',$telefone);
            }
        })->get();

        return view('home',['cliente'=>$cliente]);
    }
}
