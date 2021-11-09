<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\Locator;
use App\VendaImoveis;
use App\Vendedor;

class ImprimirController extends Controller
{
    public function nresidencial(){
        return view('imprimir-cliente-nao-residencial');

    }

    public function residencial(){
        return view('imprimir-cliente-residencial');
    }

    public function locacao(){
        return view('_components.imprimir-id');
    }

    public function venda(){
        return view('_components.imprimir-id-venda');
    }

    public function imprimirId(Request $request){
        $id = $request->get('id');
        $idVenda = $request->get('idVenda');

        if(isset($idVenda) && $idVenda != null){
            $imovel =  LocacaoImoveis::where('id',$idVenda)->get()->first();
            $vendedor =  Locator::where('id',$imovel->idVendedor)->get()->first();

            return view('imprimir-locacao-proprietario',['imovel'=>$imovel,'vendedor'=>$vendedor]);
        }

        $imovel =  LocacaoImoveis::where('id',$id)->get()->first();
        $locador =  Locator::where('id',$imovel->idLocador)->get()->first();

        return view('imprimir-locacao-proprietario',['imovel'=>$imovel,'locador'=>$locador]);

    }
}
