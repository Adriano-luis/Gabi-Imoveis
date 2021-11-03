<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        
    }
}
