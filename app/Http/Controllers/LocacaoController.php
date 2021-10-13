<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\Locator;

class LocacaoController extends Controller
{

    //Cadastro de Imoveis
    public function novoimovel(){
        
        return view('locacao-cadastro');
    }

    public function novoimovelPost(Request $request){
      /* //recuperando os dados preenchidos
        $valor = $request->get('');
        $enderecoImovel = $request->get('');
        $numeroImovel = $request->get('');
        $bairoImovel = $request->get('');
        $municipioImovel = $request->get('');
        $complementoImovel = $request->get('');
        $metragemTot = $request->get('');
        $metragemUtil = $request->get('');
        $qtComodos = $request->get('');
        $quarto = $request->get('');
        $suite = $request->get('');
        $cozinha = $request->get('');
        $lavanderia = $request->get('');
        $salaEstar = $request->get('');
        $salaJantar = $request->get('');
        $banheiro = $request->get('');
        $garagem = $request->get('');
        $escritorio = $request->get('');
        $jardim = $request->get('');
        $varanda = $request->get('');
        $aguaLuz = $request->get('');
        $rgi = $request->get('');
        $instal = $request->get('');
        $iptu = $request->get('');
        $condo = $request->get('');
        $valorCondo = $request->get('');
        $andar = $request->get('');
        $mobilhado = $request->get('');
        $pet = $request->get('');
        $optVenda = $request->get('');
        $descImovel = $request->get('');
        $descMobilha = $request->get('');
        $descCond = $request->get('');
        $obs = $request->get('');
        $img1 = $request->get('');
        $img2 = $request->get('');
        $img3 = $request->get('');
        $img4 = $request->get('');
        $img5 = $request->get('');
        $img6 = $request->get('');
        $img7 = $request->get('');
        $img8 = $request->get('');
        $img9 = $request->get('');
        $img10 = $request->get('');

        //salvando no DB
        $novoImovel = new LocacaoImoveis();
        $existeImovel = $novoImovel->where('RGI',$rgi)->first()->get();
        if($existeImovel == ''){
            $novoImovel-> valor = $valor;
            $novoImovel-> endereco = $enderecoImovel;
            $novoImovel-> numero = $numeroImovel;
            $novoImovel-> bairro = $bairoImovel;
            $novoImovel-> municipio = $municipioImovel;
            $novoImovel-> complemento = $complementoImovel;
            $novoImovel-> metragemTotal = $metragemTot;
            $novoImovel-> metragemUtil = $metragemUtil;
            $novoImovel-> qtComodos = $qtComodos;
            $novoImovel-> quarto = $quarto;
            $novoImovel-> suite = $suite;
            $novoImovel-> cozinha = $cozinha;
            $novoImovel-> lavanderia = $lavanderia;
            $novoImovel-> salaEstar = $salaEstar;
            $novoImovel-> salaJantar = $salaJantar;
            $novoImovel-> banheiro = $banheiro;
            $novoImovel-> garagem = $garagem;
            $novoImovel-> escritorio = $escritorio;
            $novoImovel-> jardim = $jardim;
            $novoImovel-> varanda = $varanda;
            $novoImovel-> aguaLuzSeparado = $aguaLuz;
            $novoImovel-> RGI = $rgi;
            $novoImovel-> instalacao = $instal;
            $novoImovel-> IPTU = $iptu;
            $novoImovel-> condominio = $condo;
            $novoImovel-> valorCondominio = $valorCondo;
            $novoImovel-> andar = $andar;
            $novoImovel-> mobilhado = $mobilhado;
            $novoImovel-> pet = $pet;
            $novoImovel-> opcaoCompra = $optVenda;
            $novoImovel-> sobreImovel = $descImovel;
            $novoImovel-> sobreMobilia = $descMobilha;
            $novoImovel-> sobreCondominio = $descCond;
            $novoImovel-> observacoes = $obs;
            $novoImovel-> img1 = $img1;
            $novoImovel-> img2 = $img2;
            $novoImovel-> img3 = $img3;
            $novoImovel-> img4 = $img4;
            $novoImovel-> img5 = $img5;
            $novoImovel-> img6 = $img6;
            $novoImovel-> img7 = $img7;
            $novoImovel-> img8 = $img8;
            $novoImovel-> img9 = $img9;
            $novoImovel-> img10 = $img10;
            $novoImovel->save();
        } else{
            $imovel = 'Imovel já cadastrado!';
        }
        
        //retornando
        if($imovel != ''){
            return view('locacao-cadastro',['existeImovel'=>$imovel]);
        } else{*/
            return view('locacao-cadastro-cliente',['id'=>1]);
        //}

    }

    public function editarimovel(Request $request){
        $id = $request->get('');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarImovel = new LocacaoImoveis();
        $imovel = $editarImovel->where('id',$id)->get()->toArray();
        if($imovel != ''){
            return view('locacao-cadastro',['dados'=>$imovel]);
        } else{
            return redirect()->back();
        }

    }










    //Cadastro de de Cliente
    public function novocliente(Request $request){
        $id = $request->get('id');
        if($id != ''){
            return view('locacao-cadastro-cliente',['idImovel'=>$id]);
        } else{
            return view('locacao-cadastro-cliente');
        }
       

    }

    public function novoclientePost(Request $request){
        /*//recuperando os dados preenchidos
        $idImovel = $request->get('');
        $nome = $request->get('');
        $enderecoLocator = $request->get('');
        $numLocator = $request->get('');
        $bairroLocator = $request->get('');
        $municipioLocator = $request->get('');
        $compleLocator = $request->get('');
        $estadoCivil = $request->get('');
        $profissao = $request->get('');
        $cpf = $request->get('');
        $rg = $request->get('');
        $telefone = $request->get('');
        $banco = $request->get('');
        $agencia = $request->get('');
        $tipoConta = $request->get('');
        $conta = $request->get('');
        $pix = $request->get('');

        //salvando no DB
        $novoLocator =  new Locator();
        $existeLocator = $novoLocator->where('CPF',$cpf)->first()->get();
        if($existeLocator == ''){
            $novoLocator-> idImovel = $idImovel;
            $novoLocator-> nome = $nome;
            $novoLocator-> endereco = $enderecoLocator;
            $novoLocator-> numero = $numLocator;
            $novoLocator-> bairro = $bairroLocator;
            $novoLocator-> municipio = $municipioLocator;
            $novoLocator-> complemento = $compleLocator;
            $novoLocator-> estadoCivil = $estadoCivil;
            $novoLocator-> profissao = $profissao;
            $novoLocator-> CPF = $cpf;
            $novoLocator-> RG = $rg;
            $novoLocator-> telefone = $telefone;
            $novoLocator-> banco = $banco;
            $novoLocator-> agencia = $agencia;
            $novoLocator-> tipoConta = $tipoConta;
            $novoLocator-> conta = $conta;
            $novoLocator-> pix = $pix;
            $novoLocator->save();
        }else{
            $locator = 'Locator já cadastrado!';
        }

         //retornando
        if($locator != ''){
            return view('locacao-cadastro',['existeLocator'=>$locator]);
        } else{*/
            return redirect()->route('imovel',['c'=>'c']);
        //}
    }

    public function editarcliente(Request $request){
        $telefone = $request->get('');
        if(!isset($telefone) || $telefone == ''){
            return redirect()->back();
        }

        $editarCliente = new Locator();
        $cliente = $editarCliente->where('telefone',$telefone)->get()->toArray();
        if($cliente != ''){
            return view('locacao-cadastro-cliente',['dados'=>$cliente]);
        } else{
            return redirect()->back();
        }

        
    }
}
