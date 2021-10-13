<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index(Request $request){
        $clienteCadastrado = $request->get('c');
        if($clienteCadastrado == 'c'){
            return view('imovel',['c'=>'c']);
        }else{
            return view('imovel');
        }
        
    }
}
