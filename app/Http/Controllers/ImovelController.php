<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\VendaImoveis;

class ImovelController extends Controller
{
    public function index(Request $request){
        $clienteCadastrado = $request->get('c');
        $idLoc = $request->get('locId');
        $idVen = $request->get('venId');

        if($idLoc != null ){
            $imovel = LocacaoImoveis::find($idLoc);
        }else{
            $imovel = VendaImoveis::find($idVen);
        }

        if($clienteCadastrado == 'c'){
            return view('imovel',['c'=>'c','dadosImovel'=>$imovel]);
        }else{
            return view('imovel',['dadosImovel'=>$imovel]);
        }
        
    }

    public function enviar(Request $request){
        $idLoc = $request->get('envioLoc');
        $idVen = $request->get('envioVen');
        $telefone = $request->get('telefoneEnvio');

        if($idLoc != null ){
            $imovel = LocacaoImoveis::find($idLoc);
            $URL = "http://wa.me/$telefone?text=valor:%20$imovel->valor%20interesse%20no%20carro%20anunciado";
            dd($URL);
        }else{
            $imovel = VendaImoveis::find($idVen);
        }
    }
}
