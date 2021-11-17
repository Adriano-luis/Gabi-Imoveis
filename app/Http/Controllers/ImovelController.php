<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\VendaImoveis;
use App\Clientes;

class ImovelController extends Controller
{
    public function index(Request $request){
        $clienteCadastrado = $request->get('c');
        $idLoc = $request->get('locId');
        $idVen = $request->get('venId');

        if($idLoc != null ){
            $imovel = LocacaoImoveis::find($idLoc);
            $interessados = Clientes::where('idLoc',$imovel->id)->get();
        }else{
            $imovel = VendaImoveis::find($idVen);
            $interessados = Clientes::where('idVen',$imovel->id)->get();
        }


        if($clienteCadastrado == 'c'){
            return view('imovel',['c'=>'c','dadosImovel'=>$imovel]);
        }else{
            return view('imovel',['dadosImovel'=>$imovel,'interessados'=>$interessados]);
        }
        
    }


    public function novoInteressado(Request $request){
        dd($request);
        $clientes = Clientes::all();
        
        return $clientes;
    }

    public function interessadoSalva(Request $request){
        $idLoc = $request->get('interessadoSalvaLoc'); 
        $idVen = $request->get('interessadoSalvaVen'); 
        $nomeVen = $request->get('interessadosVen');
        $nomeLoc = $request->get('InteressadosLoc');

        if($idLoc != null ){
            $interessado = Clientes::where('nome',$nomeLoc)->update(['idLoc'=>$idLoc]);
            return redirect()->route('imovel',['locId'=>$idLoc]);
        }else{
            $interessado = Clientes::where('nome',$nomeVen)->update(['idVen'=>$idVen]);
            return redirect()->route('imovel',['venId'=>$idVen]);
        }

        
        
    }
}
