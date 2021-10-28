<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\Locator;
use App\VendaImoveis;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('home');
    }

    public function busca(Request $request){
        $idImovel = $request->get('id');
        $request->input('aluguelCheck') == 'on'? $aluguel = 'Sim': $aluguel = 'Nao';
        $request->input('vendaCheck') == 'on'? $venda = 'Sim': $venda = 'Nao';
        $valor = $request->get('valor');
        $enderecoImovel = $request->get('rua');
        $numeroImovel = $request->get('numero');
        $metragemTot = $request->get('metragemTot');
        $qtComodos = $request->get('qtCom');
        $qtQuarto = $request->get('qtQuartos');
        $qtBanheiro = $request->get('qtBanheiros');
        $qtVagas = $request->get('qtVagas');
        $request->input('individualCheck') == 'on'? $individual = 'Sim': $individual = 'Nao';
        $request->input('condominioCheck') == 'on'? $condo = 'Sim': $condo = 'Nao';
        $request->input('mobiliado') == 'on'? $mobilhado = 'Sim': $mobilhado = 'Nao';
        $request->input('pet') == 'on'? $pet = 'Sim': $pet = 'Nao';
        $rgi = $request->get('rgi');


        if($aluguel == 'Sim'){
            $imoveis = LocacaoImoveis::where(function($query) use ($idImovel){
                if($idImovel != null){
                    $query->where('id',$idImovel);
                }
            })
            ->where(function($query) use ($valor){
                if($valor != null){
                    $query->where('valor',$valor);
                }
            })
            ->where(function($query) use ($enderecoImovel){
                if($enderecoImovel != null){
                    $query->where('endereco','like','%'.$enderecoImovel.'%');
                }
            })
            ->where(function($query) use ($numeroImovel){
                if($numeroImovel != null){
                    $query->where('numero',$numeroImovel);
                }
            })
            ->where(function($query) use ($metragemTot){
                if($metragemTot != null){
                    $query->where('metragemTotal',$metragemTot);
                }
            })
            ->where(function($query) use ($qtComodos){
                if($qtComodos != null){
                    $query->where('qtComodos',$qtComodos);
                }
            })
            ->where(function($query) use ($qtQuarto){
                if($qtQuarto != null){
                    $query->where('quarto',$qtQuarto);
                }
            })
            ->where(function($query) use ($qtBanheiro){
                if($qtBanheiro != null){
                    $query->where('banheiro',$qtBanheiro);
                }
            })
            ->where(function($query) use ($qtVagas){
                if($qtVagas != null){
                    $query->where('garagem',$qtVagas);
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
            ->where(function($query) use ($pet){
                if($pet != 'Nao'){
                    $query->where('pet',$pet);
                }
            })
            ->where(function($query) use ($rgi){
                if($rgi != null){
                    $query->where('RGI','like','%'.$rgi.'%');
                }
            })
            ->get();
        } else{
            $imoveisV = VendaImoveis::where(function($query) use ($idImovel){
                if($idImovel != null){
                    $query->where('id',$idImovel);
                }
            })
            ->where(function($query) use ($valor){
                if($valor != null){
                    $query->where('valor',$valor);
                }
            })
            ->where(function($query) use ($enderecoImovel){
                if($enderecoImovel != null){
                    $query->where('endereco','like','%'.$enderecoImovel.'%');
                }
            })
            ->where(function($query) use ($numeroImovel){
                if($numeroImovel != null){
                    $query->where('numero',$numeroImovel);
                }
            })
            ->where(function($query) use ($metragemTot){
                if($metragemTot != null){
                    $query->where('metragemTotal',$metragemTot);
                }
            })
            ->where(function($query) use ($qtComodos){
                if($qtComodos != null){
                    $query->where('qtComodos',$qtComodos);
                }
            })
            ->where(function($query) use ($qtQuarto){
                if($qtQuarto != null){
                    $query->where('quarto',$qtQuarto);
                }
            })
            ->where(function($query) use ($qtBanheiro){
                if($qtBanheiro != null){
                    $query->where('banheiro',$qtBanheiro);
                }
            })
            ->where(function($query) use ($qtVagas){
                if($qtVagas != null){
                    $query->where('garagem',$qtVagas);
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
            ->where(function($query) use ($pet){
                if($pet != 'Nao'){
                    $query->where('pet',$pet);
                }
            })
            ->where(function($query) use ($rgi){
                if($rgi != null){
                    $query->where('RGI','like','%'.$rgi.'%');
                }
            })
            ->get();
        }
        

        /*$locator = $request->get('locator');
        $telefone = $request->get('telefone');

        $locator = Locator::where(function($query) use ($locator){
            if($locator != null){
                $query->where('nome',$locator);
            }
        })
        ->where(function($query) use ($valor){
            if($valor != null){
                $query->where('valor',$valor);
            }
        })
        ->where(function($query) use ($enderecoImovel){
            if($enderecoImovel != null){
                $query->where('endereco',$enderecoImovel);
            }
        })->get();*/
        
        if(isset($imoveisV)){
            return view('home',['imoveisV'=>$imoveisV]);
        }
        return view('home',['imoveis'=>$imoveis]);
    }
}
