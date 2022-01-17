<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\VendaImoveis;
use App\Clientes;

class ClienteController extends Controller
{
    public function index(Request $request){
        $clientes = Clientes::all();
        return view('lista-clientes',['clientes'=>$clientes]);
        
        
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
                'observacoes'   => $request->input('obs'),
                'individual'    => $request->input('individualCheck') == 'on' ? 'Sim':'Nao',
                'condominio'    => $request->input('condominioCheck') == 'on' ? 'Sim':'Nao',
                'mobilhado'     => $request->input('mobiliado') == 'on' ? 'Sim':'Nao',
                'disponivel'    => $request->input('disponivel') == 'on' ? 'Sim':'Nao',
            ]);
            return redirect()->route('cliente');
        }

        $cliente = Clientes::find($id);
        return view('lista-clientes-editar',['cliente'=>$cliente]); 

    }

    public function buscaCliente(Request $request){
        $nome = $request->get('nome');
        if(!isset($nome) || $nome == ''){
            return redirect()->back();
        }

        $cliente = new Clientes();
        $cliente = $cliente->where('nome','like','%'.$nome.'%')->get();
        if($cliente != ''){
            return view('lista-clientes',['clientes'=>$cliente]); 
        } else{
            return redirect()->back();
        }
    }

    public function busca(Request $request){
        $id = $request->get('id');

        $cliente = Clientes::find($id);

        if($cliente->tipo == 'residencial' || $cliente->tipo == "nResidencial"){
            
            $valorMin           = $cliente->valorMin;
            $valorMax           = $cliente->valorMax;
            $resi               = $cliente-> tipo == 'residencial' ? 'residencial': null;
            $naoResi            = $cliente-> tipo == 'nResidencial' ? 'nResidencial': null;
            $enderecoImovel     = $cliente-> endereco;
            $bairro             = $cliente-> bairro;
            $metragemTot        = $cliente-> metragemTotal;
            $qtComodos          = $cliente-> qtComodos;
            $qtQuarto           = $cliente-> quarto;
            $individual         = $cliente-> individual;
            $condo              = $cliente-> condominio;
            $mobilhado          = $cliente-> mobilhado;

            $imoveis = LocacaoImoveis::where(function($query) use ($valorMin,$valorMax){
                if($valorMax != null && $valorMin != null){
                    $query->whereBetween('valor',[$valorMin,$valorMax]);
                }
            })
            ->where(function($query) use ($resi){
                if($resi != null){
                    $query->where('tipo',$resi);
                }
            })
            ->where(function($query) use ($naoResi){
                if($naoResi != null){
                    $query->where('tipo',$naoResi);
                }
            })
            ->where(function($query) use ($enderecoImovel){
                if($enderecoImovel != null){
                    $query->where('endereco','like','%'.$enderecoImovel.'%');
                }
            })
            ->where(function($query) use ($bairro){
                if($bairro != null){
                    $query->where('bairro',$bairro);
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
            /*->where(function($query) use ($qtBanheiro){
                if($qtBanheiro != null){
                    $query->where('banheiro',$qtBanheiro);
                }
            })
            >where(function($query) use ($qtVagas){
                if($qtVagas != null){
                    $query->where('garagem',$qtVagas);
                }
            })*/
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
            /*->where(function($query) use ($pet){
                if($pet != 'Nao'){
                    $query->where('pet',$pet);
                }
            })*/
            ->get()->toArray();
        }else{

            $valorMin           = $cliente->valorMin;
            $valorMax           = $cliente->valorMax;
            $ap                 = $cliente-> tipo == 'apartamento' ? 'apartamento': null;
            $casa               = $cliente-> tipo == 'casa' ? 'casa': null;
            $chaca              = $cliente-> tipo == 'chacara' ? 'chacara': null;
            $terre              = $cliente-> tipo == 'terreno' ? 'terreno': null;
            $enderecoImovel     = $cliente-> endereco;
            $bairro             = $cliente-> bairro;
            $metragemTot        = $cliente-> metragemTotal;
            $qtComodos          = $cliente-> qtComodos;
            $qtQuarto           = $cliente-> quarto;
            $individual         = $cliente-> individual;
            $condo              = $cliente-> condominio;
            $mobilhado          = $cliente-> mobilhado;

            $imoveisV = VendaImoveis::where(function($query) use ($ap){
                if($ap != null){
                    $query->where('tipo',$ap);
                }
            })
            ->where(function($query) use ($casa){
                if($casa != null){
                    $query->where('tipo',$casa);
                }
            })
            ->where(function($query) use ($chaca){
                if($chaca != null){
                    $query->where('tipo',$chaca);
                }
            })
            ->where(function($query) use ($terre){
                if($terre != null){
                    $query->where('tipo',$terre);
                }
            })
            ->where(function($query) use ($valorMin,$valorMax){
                if($valorMax != null && $valorMin != null){
                    $query->whereBetween('valor',[$valorMin,$valorMax]);
                }
            })
            ->where(function($query) use ($enderecoImovel){
                if($enderecoImovel != null){
                    $query->where('endereco','like','%'.$enderecoImovel.'%');
                }
            })
            ->where(function($query) use ($bairro){
                if($bairro != null){
                    $query->where('bairro',$bairro);
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
            /*->where(function($query) use ($qtBanheiro){
                if($qtBanheiro != null){
                    $query->where('banheiro',$qtBanheiro);
                }
            })
            ->where(function($query) use ($qtVagas){
                if($qtVagas != null){
                    $query->where('garagem',$qtVagas);
                }
            })*/
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
            /*->where(function($query) use ($pet){
                if($pet != 'Nao'){
                    $query->where('pet',$pet);
                }
            })
            ->where(function($query) use ($rgi){
                if($rgi != null){
                    $query->where('RGI','like','%'.$rgi.'%');
                }
            })*/
            ->get()->toArray();

        }
        
        if(isset($imoveisV)){
            return redirect()->route('home',['imoveisV'=>$imoveisV,'ray' => 'sim']);
        }

        return redirect()->route('home',['imoveis'=>$imoveis,'ray' => 'sim']);
    }


    public function excluir(Request $request){
        $id = $request->get('id');

        $cliente = new Clientes();
        $cliente = $cliente->where('id',$id)->delete();

        return redirect()->route('cliente'); 
    }
}
