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

    public function editar(Request $request){
        $id = $request->get('id');

        if($request->get('_token') != ''){
            $cliente = Clientes::where('id',$id)->update([
                'nome'          => $request->input('NomeCliente'),
                'telefone'      => $request->input('TelefoneCliente'),
                'valorMin'      => $request->input('valorMin'),
                'valorMax'      => $request->input('valorMax'),
                'tipo'          => $request->input('tipo'),
                'endereco'      => $request->input('rua'),
                'bairro'        => $request->input('bairro'),
                'metragemTotal' => $request->input('metragemTot'),
                'qtComodos'     => $request->input('qtCom'), 
                'quarto'        => $request->input('qtQuartos'),
                'individual'    => $request->input('individualCheck') == 'on' ? 'Sim':'Não',
                'condominio'    => $request->input('condominioCheck') == 'on' ? 'Sim':'Não',
                'mobilhado'     => $request->input('mobiliado') == 'on' ? 'Sim':'Não',
                'disponivel'    => $request->input('disponivel') == 'on' ? 'Sim':'Não',
            ]);
            return redirect()->route('cliente');
        }

        $cliente = Clientes::find($id);
        return view('lista-clientes-editar',['cliente'=>$cliente]);

        
    }
}
