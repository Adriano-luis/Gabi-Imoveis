<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\VendaImoveis;
use DateTime;

class ImovelParado extends Controller
{
    public function index(){
        $paradosVend = VendaImoveis::all();

        $paradosLoc = LocacaoImoveis::all();
        
        $listaVend = [];
        foreach($paradosVend as $parado){
            $hoje = new DateTime("now");
            $criado = new DateTime("$parado->criado");
            $tempo = $hoje->diff($criado);
            if($tempo->days > 182){
                array_push($listaVend,$parado);
            }
            
        }

        $listaLoc = [];
        foreach($paradosLoc as $parado){
            $hoje = new DateTime("now");
            $criado = new DateTime("$parado->criado");
            $tempo = $hoje->diff($criado);
            if($tempo->days > 182){
                array_push($listaLoc,$parado);
            }
            
        }

        return view('imoveis-parados',['paradosLoc'=>$listaLoc,'paradosVend'=>$listaVend]);
    }
}
