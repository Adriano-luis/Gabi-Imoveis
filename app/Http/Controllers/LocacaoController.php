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
       //recuperando os dados preenchidos
        $valor = $request->get('valor');
        $enderecoImovel = $request->get('rua');
        $numeroImovel = $request->get('numero');
        $bairoImovel = $request->get('bairro');
        $municipioImovel = $request->get('municipio');
        $complementoImovel = $request->get('complemento');
        $metragemTot = $request->get('metragemTot');
        $metragemUtil = $request->get('metragemUtil');
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
        $request->input('aguaLuz') == 'on'? $aguaLuz = 'Sim': $aguaLuz = 'Nao';
        $rgi = $request->get('rgi');
        $instal = $request->get('instalacao');
        $iptu = $request->get('iptu');
        $request->input('condominioCheck') == 'on'? $condo = 'Sim': $condo = 'Nao';
        $nomeCondo = $request->get('condominioNome');
        $valorCondo = $request->get('condominioVal');
        $andar = $request->get('andar');
        $request->input('individualCheck') == 'on'? $individual = 'Sim': $individual = 'Nao';
        $request->input('mobiliado') == 'on'? $mobilhado = 'Sim': $mobilhado = 'Nao';
        $request->input('pet') == 'on'? $pet = 'Sim': $pet = 'Nao';
        $request->input('opcVenda') == 'on'? $optVenda = 'Sim': $optVenda = 'Nao';
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
        $novoImovel = new LocacaoImoveis();
        $existeImovel = $novoImovel->where('RGI',$rgi)->first();
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
            $novoImovel-> nomeCondominio = $nomeCondo;
            $novoImovel-> valorCondominio = $valorCondo;
            $novoImovel-> andar = $andar;
            $novoImovel-> individual = $individual;
            $novoImovel-> mobilhado = $mobilhado;
            $novoImovel-> pet = $pet;
            $novoImovel-> opcaoCompra = $optVenda;
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
            return view('locacao-cadastro',['existeImovel'=>$imovel]);
        } else{
            $idImovel = new LocacaoImoveis();
            $id = $idImovel->latest()->get()->first(); 
            return view('locacao-cadastro-cliente',['id'=>$id->id]);
        }

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
        $novoLocator =  new Locator();
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
            $locator = 'Locator já cadastrado!';
        }

         //retornando
        if(isset($locator)){
            return view('locacao-cadastro',['existeLocator'=>$locator]);
        } else{
            return redirect()->route('imovel',['c'=>'c']);
        }
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
