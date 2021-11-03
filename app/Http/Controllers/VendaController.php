<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendaImoveis;
use App\Vendedor;

class VendaController extends Controller
{


    
    //Cadastro  de Cliente
    public function novocliente(Request $request){

        return view('venda-cadastro-cliente');
       
    }

    public function novoclientePost(Request $request){
        //recuperando os dados preenchidos
        $nome = $request->get('nome');
        $enderecoVendedor = $request->get('logradouro');
        $numVendedor = $request->get('numero');
        $bairroVendedor = $request->get('bairro');
        $municipioVendedor = $request->get('municipio');
        $compleVendedor = $request->get('complemento');
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
        $novoVendedor =  new Vendedor();
        $existeVendedor = $novoVendedor->where('CPF',$cpf)->get()->first();
        if($existeVendedor == ''){
            $novoVendedor-> nome = $nome;
            $novoVendedor-> endereco = $enderecoVendedor;
            $novoVendedor-> numero = $numVendedor;
            $novoVendedor-> bairro = $bairroVendedor;
            $novoVendedor-> municipio = $municipioVendedor;
            $novoVendedor-> complemento = $compleVendedor;
            $novoVendedor-> estadoCivil = $estadoCivil;
            $novoVendedor-> nascimento = $dataNascimento;
            $novoVendedor-> profissao = $profissao;
            $novoVendedor-> CPF = $cpf;
            $novoVendedor-> RG = $rg;
            $novoVendedor-> telefone = $telefone;
            $novoVendedor-> banco = $banco;
            $novoVendedor-> agencia = $agencia;
            $novoVendedor-> tipoConta = $tipoConta;
            $novoVendedor-> conta = $conta;
            $novoVendedor-> pix = $pix;
            $novoVendedor->save();

            $vendedor = $novoVendedor->where('CPF',$cpf)->get()->first();
            $idVendedor = $vendedor->id;

        }else{
            $vendedorExiste = 'Já existe um cadastro!';
            return redirect()->back(['existeVendedor'=>$vendedorExiste]);
        }

        return redirect()->route('ven-novo-imovel',['id'=>$idVendedor]);

    }

    public function editarcliente(Request $request){
        $telefone = $request->get('telefone');
        if(!isset($telefone) || $telefone == ''){
            return redirect()->back();
        }

        $editarCliente = new Vendedor();
        $cliente = $editarCliente->where('telefone',$telefone)->get()->first();
        if($cliente != ''){
            $imoveis = VendaImoveis::where('idVendedor',$cliente->id)->get();
            return view('venda-cadastro-cliente',['dados'=>$cliente,'imoveisV'=>$imoveis]);
        } else{
            return redirect()->back();
        }

        
    }

    public function editarclientePost(Request $request){
        /*recuperando os dados preenchidos
        $idImovel = $request->get('idImovel');
        $nome = $request->get('nome');
        $enderecoVendedor = $request->get('logradouro');
        $numVendedor = $request->get('numero');
        $bairroVendedor = $request->get('bairro');
        $municipioVendedor = $request->get('municipio');
        $compleVendedor = $request->get('complemento');
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
        $novoVendedor =  new Vendedor();
        $existeVendedor = $novoVendedor->where('CPF',$cpf)->first();
        if($existeVendedor == ''){
            $novoVendedor-> idImovel = $idImovel;
            $novoVendedor-> nome = $nome;
            $novoVendedor-> endereco = $enderecoVendedor;
            $novoVendedor-> numero = $numVendedor;
            $novoVendedor-> bairro = $bairroVendedor;
            $novoVendedor-> municipio = $municipioVendedor;
            $novoVendedor-> complemento = $compleVendedor;
            $novoVendedor-> estadoCivil = $estadoCivil;
            $novoVendedor-> nascimento = $dataNascimento;
            $novoVendedor-> profissao = $profissao;
            $novoVendedor-> CPF = $cpf;
            $novoVendedor-> RG = $rg;
            $novoVendedor-> telefone = $telefone;
            $novoVendedor-> banco = $banco;
            $novoVendedor-> agencia = $agencia;
            $novoVendedor-> tipoConta = $tipoConta;
            $novoVendedor-> conta = $conta;
            $novoVendedor-> pix = $pix;
            $novoVendedor->save();
        }else{
            $Vendedor = 'Vendedor já cadastrado!';
        }

         //retornando
        if(isset($Vendedor)){
            return redirect()->back(['existeVendedor'=>$vendedor]);
        } else{
            return redirect()->route('imovel',['c'=>'c','venId'=>$idImovel]);
        }*/
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    //Cadastro de Imoveis
    public function novoimovel(Request $request){
        $idVendedor = $request->get('id');
        /*if($idVendedor == '' || $idVendedor == null){
            return redirect()->back();
        }*/
        return view('venda-cadastro',['id'=>$idVendedor]);
    }

    public function novoimovelPost(Request $request){
       //recuperando os dados preenchidos
        $id                 = $request->get('idVendedor');
        $valor              = $request->get('valor');
        $enderecoImovel     = $request->get('rua');
        $numeroImovel       = $request->get('numero');
        $bairoImovel        = $request->get('bairro');
        $municipioImovel    = $request->get('municipio');
        $complementoImovel  = $request->get('complemento');
        $metragemTot        = $request->get('metragemTot');
        $terreno            = $request->get('terreno');
        $qtComodos          = $request->get('qtdCom');
        $quarto             = $request->get('quartos');
        $suite              = $request->get('suites');
        $cozinha            = $request->get('cozinhas');
        $lavanderia         = $request->get('lavanderia');
        $salaEstar          = $request->get('salaEstar');
        $salaJantar         = $request->get('salaJantar');
        $banheiro           = $request->get('banheiros');
        $garagem            = $request->get('vagas');
        $escritorio         = $request->get('escritorio');
        $jardim             = $request->get('jardim');
        $varanda            = $request->get('varanda');
        $request->input('contrato') == 'on'? $contrato = 'Sim': $contrato = 'Nao';
        $request->input('escritura') == 'on'? $escritura = 'Sim': $escritura = 'Nao';
        $request->input('contratoPoss') == 'on'? $contratoPoss = 'Sim': $contratoPoss = 'Nao';
        $request->input('usocapiao') == 'on'? $usocapiao = 'Sim': $usocapiao = 'Nao';
        $request->input('outros') == 'on'? $outros = 'Sim': $outros = 'Nao';
        $request->input('condominioCheck') == 'on'? $condo = 'Sim': $condo = 'Nao';
        $nomeCondo          = $request->get('condominioNome');
        $valorCondo         = $request->get('condominioVal');
        $andar              = $request->get('andar');
        $request->input('individualCheck') == 'on'? $individual = 'Sim': $individual = 'Nao';
        $request->input('mobiliado') == 'on'? $mobilhado = 'Sim': $mobilhado = 'Nao';
        $descImovel         = $request->get('descricaoImovel');
        $descMobilha        = $request->get('descricaoMobilia');
        $descCond           = $request->get('descricaoCond');
        $obs                = $request->get('observacao');
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
            $novoImovel-> idVendedor = $id;
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
            $novoImovel-> disponivel = 'Sim';
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
            return view('venda-cadastro',['existeImovel'=>$imovel]);
        }
        

        $idImovel = VendaImoveis::latest()->get()->first(); 
        return redirect()->route('imovel',['id'=>$idImovel->id]);

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

}
