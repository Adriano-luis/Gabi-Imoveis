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

    public function verCliente(Request $request){
        $id = $request->get('id');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarCliente = new Vendedor();
        $cliente = $editarCliente->where('id',$id)->get()->first();
        if($cliente != ''){
            $imoveis = VendaImoveis::where('idVendedor',$cliente->id)->get();
            return view('venda-cadastro-cliente',['dados'=>$cliente,'imoveisV'=>$imoveis]);
        } else{
            return redirect()->back();
        }
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
        
        //salvando no DB
        $editarCliente = new Vendedor();
        $cliente = $editarCliente->where('telefone',$request->get('telefone'))->get()->first();
        if($cliente != ''){
            $editarCliente->where('telefone',$request->get('telefone'))->update([
                'nome'          => $request->get('nome'),
                'endereco'      => $request->get('logradouro'),
                'numero'        => $request->get('numero'),
                'bairro'        => $request->get('bairro'),
                'municipio'     => $request->get('municipio'),
                'complemento'   => $request->get('complemento'),
                'estadoCivil'   => $request->get('estadoCivil'),
                'nascimento'    => $request->get('nascimento'),
                'profissao'     => $request->get('profissao'),
                'CPF'           => $request->get('cpf'),
                'RG'            => $request->get('rg'),
                'telefone'      => $request->get('telefone'),
                'banco'         => $request->get('banco'),
                'agencia'       => $request->get('agencia'),
                'tipoConta'     => $request->get('tipoConta'),
                'conta'         => $request->get('conta'),
                'pix'           => $request->get('pix'),
            ]);

            $cliente = $editarCliente->where('telefone',$request->get('telefone'))->get()->first();
            
        }
        
        return redirect()->route('home');
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
        $criado = $request->get('criado');
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



        //salvando no DB
        $novoImovel = new VendaImoveis();
        $existeImovel = $novoImovel->where('nomeCondominio',$nomeCondo)->first();
        //if($existeImovel == ''){
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
            $novoImovel-> criado = $criado;
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
            if ($request->hasFile('upFotos')){
                $aux = 1;
                foreach ($request->file('upFotos') as $imagem){
                    $extension = $imagem->extension();
                    $imageName = md5($imagem->getClientOriginalName().strtotime("now")).'.'.$extension;
                    $imagem->move(public_path('assets/images/locacao'),$imageName);

                    if($aux == 1){
                        $novoImovel-> img1 = $imageName;
                    }else if($aux == 2){
                        $novoImovel-> img2 = $imageName;
                    }else if($aux == 3){
                        $novoImovel-> img3 = $imageName;
                    }else if($aux == 4){
                        $novoImovel-> img4 = $imageName;
                    }else if($aux == 5){
                        $novoImovel-> img5 = $imageName;
                    }else if($aux == 6){
                        $novoImovel-> img6 = $imageName;
                    }else if($aux == 7){
                        $novoImovel-> img7 = $imageName;
                    }else if($aux == 8){
                        $novoImovel-> img8 = $imageName;
                    }else if($aux == 9){
                        $novoImovel-> img9 = $imageName;
                    }else{
                        $novoImovel-> img10 = $imageName;
                    }
                    $aux++;
                }
            }

            $novoImovel->save();

        /*} else{
            $imovel = 'Imovel já cadastrado!';
            return view('venda-cadastro',['existeImovel'=>$imovel,'id'=>$id]);
        }*/
        

        $dados = VendaImoveis::where('id',$novoImovel->id)->get()->first(); 
        return view('imovel',['dadosImovel'=>$dados]);

    }

    public function editarimovel(Request $request){
        $id = $request->get('venId');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarImovel = new VendaImoveis();
        $imovel = $editarImovel->where('id',$id)->get()->first();
        if($imovel != ''){
            return view('venda-cadastro',['dados'=>$imovel]);
        } else{
            return redirect()->back();
        }

    }

    public function editarImovelPost(Request $request){
        //salvando no DB
        $editarImovel = new VendaImoveis();
        $imovel = $editarImovel->where('id',$request->get('id'))->get()->first();
        if($imovel != ''){
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
            $criado = $request->get('criado');
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
    
    
    
            //salvando no DB
            $imovel-> valor = $valor;
            $imovel-> endereco = $enderecoImovel;
            $imovel-> numero = $numeroImovel;
            $imovel-> bairro = $bairoImovel;
            $imovel-> municipio = $municipioImovel;
            $imovel-> complemento = $complementoImovel;
            $imovel-> metragemTotal = $metragemTot;
            $imovel-> terreno = $terreno;
            $imovel-> qtComodos = $qtComodos;
            $imovel-> quarto = $quarto;
            $imovel-> suite = $suite;
            $imovel-> cozinha = $cozinha;
            $imovel-> lavanderia = $lavanderia;
            $imovel-> salaEstar = $salaEstar;
            $imovel-> salaJantar = $salaJantar;
            $imovel-> banheiro = $banheiro;
            $imovel-> garagem = $garagem;
            $imovel-> escritorio = $escritorio;
            $imovel-> jardim = $jardim;
            $imovel-> varanda = $varanda;
            $imovel-> criado = $criado;
            $imovel-> contrato = $contrato;
            $imovel-> escritura = $escritura;
            $imovel-> contratoPoss = $contratoPoss;
            $imovel-> usocapiao = $usocapiao;
            $imovel-> outros = $outros;
            $imovel-> condominio = $condo;
            $imovel-> nomeCondominio = $nomeCondo;
            $imovel-> valorCondominio = $valorCondo;
            $imovel-> andar = $andar;
            $imovel-> individual = $individual;
            $imovel-> mobilhado = $mobilhado;
            $request->input('apCheck') == 'on'? $imovel-> tipo = 'apartamento' : '';
            $request->input('casaCheck') == 'on'? $imovel-> tipo = 'casa' : '';
            $request->input('chacaCheck') == 'on'? $imovel-> tipo = 'chacara': '';
            $request->input('terreCheck') == 'on'? $imovel-> tipo = 'terreno' : '';
            $imovel-> sobreImovel = $descImovel;
            $imovel-> sobreMobilia = $descMobilha;
            $imovel-> sobreCondominio = $descCond;
            $imovel-> observacoes = $obs;
            $imovel-> disponivel = 'Sim';
            if ($request->hasFile('upFotos')){
                $aux = 1;
                foreach ($request->file('upFotos') as $imagem){
                    $extension = $imagem->extension();
                    $imageName = md5($imagem->getClientOriginalName().strtotime("now")).'.'.$extension;
                    $imagem->move(public_path('assets/images/locacao'),$imageName);

                    if($aux == 1){
                        $imovel-> img1 = $imageName;
                    }else if($aux == 2){
                        $imovel-> img2 = $imageName;
                    }else if($aux == 3){
                        $imovel-> img3 = $imageName;
                    }else if($aux == 4){
                        $imovel-> img4 = $imageName;
                    }else if($aux == 5){
                        $imovel-> img5 = $imageName;
                    }else if($aux == 6){
                        $imovel-> img6 = $imageName;
                    }else if($aux == 7){
                        $imovel-> img7 = $imageName;
                    }else if($aux == 8){
                        $imovel-> img8 = $imageName;
                    }else if($aux == 9){
                        $imovel-> img9 = $imageName;
                    }else{
                        $imovel-> img10 = $imageName;
                    }
                    $aux++;
                }
            }

            $imovel->update();

            $imovel = $editarImovel->where('id',$request->get('id'))->get()->first();
            
        
            return redirect()->route('imovel',['venId'=>$imovel->id]);
        }
    }

}
