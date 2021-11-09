<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImprimirController extends Controller
{
    public function nresidencial(){
        return view('imprimir-cliente-nao-residencial');

    }

    public function residencial(){
        return view('imprimir-proprietario');
    }

    public function locacao(){
        return view('imprimir-locacao-proprietario');
    }

    public function venda(){
        return view('');
    }
}
