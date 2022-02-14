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
        }else{
            $imovel = VendaImoveis::find($idVen);
        }

        $valor = $imovel->valor;
        $resi = $imovel->tipo;
        $endereco = $imovel->endereco;
        $bairro = $imovel->bairro;
        $metragemTot = $imovel->metragemTotal;
        $qtgaragem = $imovel->qtVagas;
        $qtQuarto = $imovel->quarto;
        $condo = $imovel->condominio;
        $individual = $imovel->individual;
        $mobilhado = $imovel->mobilhado;
        $pet = $imovel->pet;

        $interessados = Clientes::where(function($query) use ($valor){
            if($valor != null){
                $query->where('valorMin','<=', $valor )
                ->where('valorMax','>=', $valor )
                ->orWhere('valorMin',null)
                ->Where('valorMax',null);
            }
        })
        ->where(function($query) use ($resi){
            if($resi != null){
                $query->where('tipo',$resi);
            }
        })
        ->where(function($query) use ($endereco){
            if($endereco != null){
                $query->where('endereco','like','%'.$endereco.'%')
                ->orWhere('endereco',null);
            }
        })
        ->where(function($query) use ($bairro){
            if($bairro != null){
                $query->where('bairro',$bairro)
                ->orWhere('bairro',null);;
            }
        })
        ->where(function($query) use ($metragemTot){
            if($metragemTot != null){
                $query->where('metragemTotal',$metragemTot)
                ->orWhere('metragemTotal',null);;
            }
        })
        ->where(function($query) use ($qtgaragem){
            if($qtgaragem != null){
                $query->where('qtgaragem',$qtgaragem)
                ->orWhere('qtgaragem',null);;
            }
        })
        ->where(function($query) use ($qtQuarto){
            if($qtQuarto != null){
                $query->where('quarto',$qtQuarto)
                ->orWhere('quarto',null);
            }
        })
        ->where(function($query) use ($individual){
            if($individual != 'Nao'){
                $query->where('individual',$individual);
            }
        })
        ->where(function($query) use ($condo){
            if($condo != 'Nao'){
                $query->where('condominio','like','%'.$condo.'%');
            }
        })
        ->where(function($query) use ($mobilhado){
            if($mobilhado != 'Nao'){
                $query->where('mobilhado',$mobilhado);
            }
        })
        ->get();

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
