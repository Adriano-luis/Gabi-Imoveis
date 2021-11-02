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
            return view('locacao-cadastro',['existeLocador'=>$locador]);
        }
            

        return redirect()->route('loc-novo-imovel',['id'=>$idLocador]);

    }

    public function editarcliente(Request $request){
        $telefone = $request->get('telefone');
        if(!isset($telefone) || $telefone == ''){
            return redirect()->back();
        }

        $editarCliente = new Locator();
        $cliente = $editarCliente->where('telefone',$telefone)->get()->first();
        if($cliente != ''){
            $imoveis = LocacaoImoveis::where('idLocador',$cliente->id)->get();
            return view('locacao-cadastro-cliente',['dados'=>$cliente,'imoveis'=>$imoveis]);
        } else{
            return redirect()->back();
        }

        
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
        $request->input('resiCheck') == 'on'? $resi = 'residencial': 'nResidencial';
        $descImovel = $request->get('descricaoImovel');
        $descMobilha = $request->get('descricaoMobilia');
        $descCond = $request->get('descricaoCond');
        $obs = $request->get('observacao');
        
        
        /*if($request->hasFile('img1') && $request->file('img1')->isValid()){
            $img1 = $request->img1;
            $extension1 = $img1->extension();
            $imageName1 = md5($img1->getClientOriginalName().strtotime("now")).'.'.$extension1;
            $img1->move(public_path('assets/images/locacao'),$imageName1);
        }
        if($request->hasFile('img2') && $request->file('img2')->isValid()){
            $img2 = $request->img2;
            $extension2 = $img2->extension();
            $imageName2 = md5($img2->getClientOriginalName().strtotime("now")).'.'.$extension2;
            $img2->move(public_path('assets/images/locacao'),$imageName2);
        }
        if($request->hasFile('img3') && $request->file('img3')->isValid()){
            $img3 = $request->img3;
            $extension3 = $img3->extension();
            $imageName3 = md5($img3->getClientOriginalName().strtotime("now")).'.'.$extension3;
            $img3->move(public_path('assets/images/locacao'),$imageName3);
        }
        if($request->hasFile('img4') && $request->file('img4')->isValid()){
            $img4 = $request->img4;
            $extension4 = $img4->extension();
            $imageName4 = md5($img4->getClientOriginalName().strtotime("now")).'.'.$extension4;
            $img4->move(public_path('assets/images/locacao'),$imageName4);
        }
        if($request->hasFile('img5') && $request->file('img5')->isValid()){
            $img5 = $request->img5;
            $extension5 = $img5->extension();
            $imageName5 = md5($img5->getClientOriginalName().strtotime("now")).'.'.$extension5;
            $img5->move(public_path('assets/images/locacao'),$imageName5);
        }
        if($request->hasFile('img6') && $request->file('img6')->isValid()){
            $img6 = $request->img6;
            $extension6 = $img6->extension();
            $imageName6 = md5($img6->getClientOriginalName().strtotime("now")).'.'.$extension6;
            $img6->move(public_path('assets/images/locacao'),$imageName6);
        }
        if($request->hasFile('img7') && $request->file('img7')->isValid()){
            $img7 = $request->img7;
            $extension7 = $img7->extension();
            $imageName7 = md5($img7->getClientOriginalName().strtotime("now")).'.'.$extension7;
            $img7->move(public_path('assets/images/locacao'),$imageName7);
        }
        if($request->hasFile('img8') && $request->file('img8')->isValid()){
            $img8 = $request->img8;
            $extension8 = $img8->extension();
            $imageName8 = md5($img8->getClientOriginalName().strtotime("now")).'.'.$extension8;
            $img8->move(public_path('assets/images/locacao'),$imageName8);
        }
        if($request->hasFile('img9') && $request->file('img9')->isValid()){
            $img9 = $request->img9;
            $extension9 = $img9->extension();
            $imageName9 = md5($img9->getClientOriginalName().strtotime("now")).'.'.$extension9;
            $img9->move(public_path('assets/images/locacao'),$imageName9);
        }
        if($request->hasFile('img10') && $request->file('img10')->isValid()){
            $img10 = $request->img10;
            $extension10 = $img10->extension();
            $imageName10 = md5($img10->getClientOriginalName().strtotime("now")).'.'.$extension10;
            $img10->move(public_path('assets/images/locacao'),$imageName10);
        }*/

        //salvando no DB
        $novoImovel = new LocacaoImoveis();
        $existeImovel = $novoImovel->where('RGI',$rgi)->first();
        if($existeImovel == ''){
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

        } else{
            $imovel = 'Imovel já cadastrado!';
            return view('locacao-cadastro',['existeImovel'=>$imovel]);
        }

        
        $dados = LocacaoImoveis::latest()->get()->first(); 
        return view('imovel',['dadosImovel'=>$dados]);

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


}
