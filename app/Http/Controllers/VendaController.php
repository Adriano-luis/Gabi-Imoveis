<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendaImoveis;
use App\Vendedor;

class VendaController extends Controller
{


    //Cadastro de Imoveis
    public function novoimovel(){

        return view('venda-cadastro');
    }

    public function novoimovelPost(Request $request){
       //recuperando os dados preenchidos
        $valor = $request->get('valor');
        $enderecoImovel = $request->get('rua');
        $numeroImovel = $request->get('numero');
        $bairoImovel = $request->get('bairro');
        $municipioImovel = $request->get('municipio');
        $complementoImovel = $request->get('complemento');
        $metragemTot = $request->get('metragemTot');
        $terreno = $request->get('terreno');
        $qtComodos = $request->get('qtdCom');
        $quarto = $request->get('quartos');
        $suite = $request->get('suites');
        $cozinha = $request->get('cozinhas');
        $lavanderia = $request->get('lavanderia');
        $salaEstar = $request->get('salaEstar');
        $salaJantar = $request->get('salaJantar');
        $banheiro = $request->get('banheiros');
        $garagem = $request->get('vagas');
        $escritorio = $request->get('escritorio');
        $jardim = $request->get('jardim');
        $varanda = $request->get('varanda');
        $request->input('contrato') == 'on'? $contrato = 'Sim': $contrato = 'Nao';
        $request->input('escritura') == 'on'? $escritura = 'Sim': $escritura = 'Nao';
        $request->input('contratoPoss') == 'on'? $contratoPoss = 'Sim': $contratoPoss = 'Nao';
        $request->input('usocapiao') == 'on'? $usocapiao = 'Sim': $usocapiao = 'Nao';
        $request->input('outros') == 'on'? $outros = 'Sim': $outros = 'Nao';
        $request->input('condominioCheck') == 'on'? $condo = 'Sim': $condo = 'Nao';
        $nomeCondo = $request->get('condominioNome');
        $valorCondo = $request->get('condominioVal');
        $andar = $request->get('andar');
        $request->input('individualCheck') == 'on'? $individual = 'Sim': $individual = 'Nao';
        $request->input('mobiliado') == 'on'? $mobilhado = 'Sim': $mobilhado = 'Nao';
        $descImovel = $request->get('descricaoImovel');
        $descMobilha = $request->get('descricaoMobilia');
        $descCond = $request->get('descricaoCond');
        $obs = $request->get('observacao');
        /*$img1 = $request->get('');
        $img2 = $request->get('');
        $img3 = $request->get('');
        $img4 = $request->get('');
        $img5 = $request->get('');
        $img6 = $request->get('');
        $img7 = $request->get('');
        $img8 = $request->get('');
        $img9 = $request->get('');
        $img10 = $request->get('');*/

        //salvando no DB
        $novoImovel = new VendaImoveis();
        $existeImovel = $novoImovel->where('nomeCondominio',$nomeCondo)->first();
        if($existeImovel == ''){
            $novoImovel-> valor = $valor;
            $novoImovel-> endereco = $enderecoImovel;
            $novoImovel-> numero = $numeroImovel;
            $novoImovel-> bairro = $bairoImovel;
            $novoImovel-> municipio = $municipioImovel;
            $novoImovel-> complemento = $complementoImovel;
            $novoImovel-> metragemTotal = $metragemTot;
            $novoImovel-> terreno = $terreno;
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
            $novoImovel-> contrato = $contrato;
            $novoImovel-> escritura = $escritura;
            $novoImovel-> contratoPoss = $contratoPoss;
            $novoImovel-> usocapiao = $usocapiao;
            $novoImovel-> outros = $outros;
            $novoImovel-> condominio = $condo;
            $novoImovel-> nomeCondominio = $nomeCondo;
            $novoImovel-> valorCondominio = $valorCondo;
            $novoImovel-> andar = $andar;
            $novoImovel-> individual = $individual;
            $novoImovel-> mobilhado = $mobilhado;
            $request->input('apCheck') == 'on'? $novoImovel-> tipo = 'apartamento' : '';
            $request->input('casaCheck') == 'on'? $novoImovel-> tipo = 'casa' : '';
            $request->input('chacaCheck') == 'on'? $novoImovel-> tipo = 'chacara': '';
            $request->input('terreCheck') == 'on'? $novoImovel-> tipo = 'terreno' : '';
            $novoImovel-> sobreImovel = $descImovel;
            $novoImovel-> sobreMobilia = $descMobilha;
            $novoImovel-> sobreCondominio = $descCond;
            $novoImovel-> observacoes = $obs;
            /*$novoImovel-> img1 = $img1;
            $novoImovel-> img2 = $img2;
            $novoImovel-> img3 = $img3;
            $novoImovel-> img4 = $img4;
            $novoImovel-> img5 = $img5;
            $novoImovel-> img6 = $img6;
            $novoImovel-> img7 = $img7;
            $novoImovel-> img8 = $img8;
            $novoImovel-> img9 = $img9;
            $novoImovel-> img10 = $img10;*/
            $novoImovel->save();

        } else{
            $imovel = 'Imovel já cadastrado!';
        }
        
        //retornando
        if(isset($imovel)){
            return view('venda-cadastro',['existeImovel'=>$imovel]);
        } else{
            $idImovel = new VendaImoveis();
            $id = $idImovel->latest()->get()->first(); 
            return redirect()->route('ven-cadastro-cliente',['id'=>$id->id]);
        }

    }

    public function editarimovel(Request $request){
        $id = $request->get('');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarImovel = new VendaImoveis();
        $imovel = $editarImovel->where('id',$id)->get()->toArray();
        if($imovel != ''){
            return view('venda-cadastro',['dados'=>$imovel]);
        } else{
            return redirect()->back();
        }

    }










    //Cadastro de de Cliente
    public function novocliente(Request $request){
        $id = $request->get('id');
        if($id != ''){
            return view('venda-cadastro-cliente',['idImovel'=>$id]);
        } else{
            return view('venda-cadastro-cliente');
        }
       

    }

    public function novoclientePost(Request $request){
        //recuperando os dados preenchidos
        $idImovel = $request->get('idImovel');
        $nome = $request->get('nome');
        $enderecoLocator = $request->get('logradouro');
        $numLocator = $request->get('numero');
        $bairroLocator = $request->get('bairro');
        $municipioLocator = $request->get('municipio');
        $compleLocator = $request->get('complemento');
        $estadoCivil = $request->get('estadoCivil');
        $dataNascimento = $request->get('nascimento');
        $profissao = $request->get('profissao');
        $cpf = $request->get('cpf');
        $rg = $request->get('rg');
        $telefone = $request->get('telefone');
        $banco = $request->get('banco');
        $agencia = $request->get('agencia');
        $tipoConta = $request->get('tipoConta');
        $conta = $request->get('conta');
        $pix = $request->get('pix');

        //salvando no DB
        $novoLocator =  new Vendedor();
        $existeLocator = $novoLocator->where('CPF',$cpf)->first();
        if($existeLocator == ''){
            $novoLocator-> idImovel = $idImovel;
            $novoLocator-> nome = $nome;
            $novoLocator-> endereco = $enderecoLocator;
            $novoLocator-> numero = $numLocator;
            $novoLocator-> bairro = $bairroLocator;
            $novoLocator-> municipio = $municipioLocator;
            $novoLocator-> complemento = $compleLocator;
            $novoLocator-> estadoCivil = $estadoCivil;
            $novoLocator-> nascimento = $dataNascimento;
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
            $locator = 'Vendedor já cadastrado!';
        }

         //retornando
        if(isset($locator)){
            return redirect()->back(['existeVendedor'=>$vendedor]);
        } else{
            return redirect()->route('imovel',['c'=>'c']);
        }
    }

    public function editarcliente(Request $request){
        $telefone = $request->get('');
        if(!isset($telefone) || $telefone == ''){
            return redirect()->back();
        }

        $editarCliente = new Vendedor();
        $cliente = $editarCliente->where('telefone',$telefone)->get()->toArray();
        if($cliente != ''){
            return view('venda-cadastro-cliente',['dados'=>$cliente]);
        } else{
            return redirect()->back();
        }

        
    }
}
