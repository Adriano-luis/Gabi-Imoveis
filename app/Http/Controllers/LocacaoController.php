<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImoveis;
use App\Locator;

class LocacaoController extends Controller
{

    //Cadastro de de Cliente
    public function novocliente(Request $request){

        return view('locacao-cadastro-cliente');       

    }

    public function novoclientePost(Request $request){
        //recuperando os dados preenchidos
        $nome = $request->get('nome');
        $enderecoLocador = $request->get('logradouro');
        $numLocador = $request->get('numero');
        $bairroLocador = $request->get('bairro');
        $municipioLocador = $request->get('municipio');
        $compleLocador = $request->get('complemento');
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
        $novoLocador =  new Locator();
        $existeLocador = $novoLocador->where('CPF',$cpf)->first();
        if($existeLocador == ''){
            $novoLocador-> nome = $nome;
            $novoLocador-> endereco = $enderecoLocador;
            $novoLocador-> numero = $numLocador;
            $novoLocador-> bairro = $bairroLocador;
            $novoLocador-> municipio = $municipioLocador;
            $novoLocador-> complemento = $compleLocador;
            $novoLocador-> estadoCivil = $estadoCivil;
            $novoLocador-> nascimento = $dataNascimento;
            $novoLocador-> profissao = $profissao;
            $novoLocador-> CPF = $cpf;
            $novoLocador-> RG = $rg;
            $novoLocador-> telefone = $telefone;
            $novoLocador-> banco = $banco;
            $novoLocador-> agencia = $agencia;
            $novoLocador-> tipoConta = $tipoConta;
            $novoLocador-> conta = $conta;
            $novoLocador-> pix = $pix;
            $novoLocador->save();

            $locador = $novoLocador->where('CPF',$cpf)->get()->first();
            $idLocador = $locador->id;


        }else{
            $locador = 'Já existe um cadastro!';
            return view('locacao-cadastro-cliente',['existeLocador'=>$locador]);
        }
            

        return redirect()->route('loc-novo-imovel',['id'=>$idLocador]);

    }

    public function verCliente(Request $request){
        $id = $request->get('id');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarCliente = new Locator();
        $cliente = $editarCliente->where('id',$id)->get()->first();
        if($cliente != ''){
            $imoveis = LocacaoImoveis::where('idLocador',$cliente->id)->get();
            return view('locacao-cadastro-cliente',['dados'=>$cliente,'imoveis'=>$imoveis]);
        } else{
            return redirect()->back();
        }
    }

    public function editarcliente(Request $request){
        $nome = $request->get('nome');
        if(!isset($nome) || $nome == ''){
            return redirect()->back();
        }

        $editarCliente = new Locator();
        $cliente = $editarCliente->where('nome','like','%'.$nome.'%')->get();
        if($cliente != ''){
            return view('lista-locacao-cadastro-cliente',['clientes'=>$cliente]);
        } else{
            return redirect()->back();
        }

        
    }

    public function listaClietesAsPropri(Request $request){
        $id = $request->get('id');
        if(!isset($id) || $id == ''){
            return redirect()->back();
        }

        $editarCliente = new Locator();
        $cliente = $editarCliente->where('id',$id)->get()->first();
        if($cliente != ''){
            $imoveis = LocacaoImoveis::where('idLocador',$cliente->id)->get();
            return view('locacao-cadastro-cliente',['dados'=>$cliente,'imoveis'=>$imoveis]);
        }else{
            return redirect()->back();
        }
    }

    public function editarclientePost(Request $request){
        //salvando no DB
        $editarCliente = new Locator();
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
        $idLocador = $request->get('id');
        return view('locacao-cadastro',['id'=>$idLocador]);
    }

    public function novoimovelPost(Request $request){
       //recuperando os dados preenchidos
        $id = $request->get('idLocador');
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
        $criado = $request->get('criado');
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
        $request->input('resiCheck') == 'on'? $resi = 'residencial': $resi = 'nResidencial';
        $descImovel = $request->get('descricaoImovel');
        $descMobilha = $request->get('descricaoMobilia');
        $descCond = $request->get('descricaoCond');
        $obs = $request->get('observacao');
        
        

        //salvando no DB
        $novoImovel = new LocacaoImoveis();
        $existeImovel = $novoImovel->where('RGI',$rgi)->first();
        //if($existeImovel == ''){
            $novoImovel-> idLocador = $id;
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
            $novoImovel-> criado = $criado;
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
            $novoImovel-> tipo = $resi;
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
            return view('locacao-cadastro',['existeImovel'=>$imovel,'id'=>$id]);
        }*/

        
        $dados = LocacaoImoveis::where('id',$novoImovel->id)->get()->first(); 
        return view('imovel',['dadosImovel'=>$dados]);

    }

    public function editarimovel(Request $request){
        $idLoc = $request->get('idLoc');
        if(!isset($idLoc) || $idLoc == ''){
            return redirect()->back();
        }

        $editarImovel = new LocacaoImoveis();
        $imovel = $editarImovel->where('id',$idLoc)->get()->first();
        if($imovel != ''){
            return view('locacao-cadastro',['dados'=>$imovel]);
        } else{
            return redirect()->back();
        }

    }

    public function editarImovelPost(Request $request){
        //salvando no DB
        $editarImovel = new LocacaoImoveis();
        $imovel = $editarImovel->where('id',$request->get('id'))->get()->first();
        if($imovel != ''){
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
            $criado = $request->get('criado');
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
            $request->input('resiCheck') == 'on'? $resi = 'residencial': $resi = 'nResidencial';
            $request->input('disponivel') == 'on'? $disponivel = 'Sim': $disponivel = 'Nao';
            $descImovel = $request->get('descricaoImovel');
            $descMobilha = $request->get('descricaoMobilia');
            $descCond = $request->get('descricaoCond');
            $obs = $request->get('observacao');
            
            

            //salvando no DB
            $imovel-> valor = $valor;
            $imovel-> endereco = $enderecoImovel;
            $imovel-> numero = $numeroImovel;
            $imovel-> bairro = $bairoImovel;
            $imovel-> municipio = $municipioImovel;
            $imovel-> complemento = $complementoImovel;
            $imovel-> metragemTotal = $metragemTot;
            $imovel-> metragemUtil = $metragemUtil;
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
            $imovel-> aguaLuzSeparado = $aguaLuz;
            $imovel-> RGI = $rgi;
            $imovel-> instalacao = $instal;
            $imovel-> IPTU = $iptu;
            $imovel-> condominio = $condo;
            $imovel-> nomeCondominio = $nomeCondo;
            $imovel-> valorCondominio = $valorCondo;
            $imovel-> andar = $andar;
            $imovel-> individual = $individual;
            $imovel-> mobilhado = $mobilhado;
            $imovel-> pet = $pet;
            $imovel-> tipo = $resi;
            $imovel-> sobreImovel = $descImovel;
            $imovel-> sobreMobilia = $descMobilha;
            $imovel-> sobreCondominio = $descCond;
            $imovel-> observacoes = $obs;
            $imovel-> disponivel = $disponivel;
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
        
    
            return redirect()->route('imovel',['locId'=>$imovel->id]);
        
        }
    }


}
