<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\Locator;

class LocacaoController extends Controller
{

    //Cadastro de Imoveis
    public function novoimovel(){
        $teste = [1,2,3,4,5,6];
        return view('locacao-cadastro',['array'=>$teste]);
    }

    public function novoimovelPost(Request $request){
        /*
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

        $novoImovel = new LocacaoImoveis();
        $novoImovel-> = $valor
        $novoImovel-> = $enderecoImovel
        $novoImovel-> = $numeroImovel
        $novoImovel-> = $numeroImovel
        $novoImovel-> = $bairoImovel
        $novoImovel-> = $municipioImovel
        $novoImovel-> = $complementoImovel
        $novoImovel-> = $metragemTot
        $novoImovel-> = $metragemUtil
        $novoImovel-> = $qtComodos
        $novoImovel-> = $quarto
        $novoImovel-> = $cozinha
        $novoImovel-> = $lavanderia
        $novoImovel-> = $salaEstar
        $novoImovel-> = $salaJantar
        $novoImovel-> = $banheiro
        $novoImovel-> = $garagem
        $novoImovel-> = $escritorio
        $novoImovel-> = $jardim
        $novoImovel-> = $varanda
        $novoImovel-> = $aguaLuz
        $novoImovel-> = $rgi
        $novoImovel-> = $instal
        $novoImovel-> = $iptu
        $novoImovel-> = $condo
        $novoImovel-> = $valorCondo
        $novoImovel-> = $andar
        $novoImovel-> = $mobilhado
        $novoImovel-> = $pet
        $novoImovel-> = $optVenda
        $novoImovel-> = $descImovel
        $novoImovel-> = $descMobilha
        $novoImovel-> = $descCond
        $novoImovel-> = $obs
        $novoImovel-> = $img1
        $novoImovel-> = $img2
        $novoImovel-> = $img3
        $novoImovel-> = $img4
        $novoImovel-> = $img5
        $novoImovel-> = $img6
        $novoImovel-> = $img7
        $novoImovel-> = $img8
        $novoImovel-> = $img9
        $novoImovel-> = $img10
        $novoImovel->save();

        $novoLocator =  new Locator();
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
        $novoLocator->save();*/
        return redirect()->route('imovel');
    }










    //Cadastro de de Cliente
    public function novocliente(){
        //return view();
        return 'novo cliente de locação';
    }
}
