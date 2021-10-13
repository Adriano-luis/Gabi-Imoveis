<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $clienteCadastrado = $request->get('c');
        if($clienteCadastrado == 'c'){
            return view('home',['c'=>'c']);
        }
        return view('home');
    }
}
