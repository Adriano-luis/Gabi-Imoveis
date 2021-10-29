<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClienteController extends Controller
{
    public function index(Request $request){
        $clientes = Clientes::all();
        return view('lista-clientes',['clientes'=>$clientes]);
        
        
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
