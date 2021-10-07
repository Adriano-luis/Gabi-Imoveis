<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocacaoController extends Controller
{

    //Cadastro de Imoveis
    public function novoimovel(){
        $teste = [1,2,3,4,5,6];
        return view('locacao-cadastro',['array'=>$teste]);
    }










    //Cadastro de de Cliente
    public function novocliente(){
        //return view();
        return 'novo cliente de locação';
    }
}
