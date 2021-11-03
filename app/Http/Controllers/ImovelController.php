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
}
