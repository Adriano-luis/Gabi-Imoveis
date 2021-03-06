<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Páginas de Login
Route::get('/',function(){
    return redirect()->route('login');
});
Route::get('/login/{erro?}','LoginController@index')->name('login');
Route::post('/login', 'LoginController@autenticar')->name('login');
Route::get('/suporte',function(){
    return view('suporte');
});

Route::middleware('login')->prefix('logged')->group(function (){
    //Home
    Route::get('/home','HomeController@index')->name('home');
    Route::post('/home','HomeController@busca')->name('home');
    Route::get('/logout', 'LoginController@sair')->name('sair');

    //Cliente
    Route::get('/lista-cliente','ClienteController@index')->name('cliente');
    Route::get('/cadastro-rapido-busca','ClienteController@busca')->name('cliente-busca');
    Route::get('/lista-cliente/editar','ClienteController@editar')->name('cliente-editar');
    Route::get('/lista-cliente/excluir','ClienteController@excluir')->name('cliente-excluir');
    Route::post('/lista-cliente/busca','ClienteController@buscaCliente')->name('cliente-busca-pagina');

    // Cadastros Locação
    Route::get('/locacao/cadastrar-imovel','LocacaoController@novoimovel')->name('loc-novo-imovel');
    Route::post('/locacao/cadastrar-imovel','LocacaoController@novoimovelPost')->name('loc-novo-imovel');
    Route::get('/locacao/cadastrar-cliente/{id?}','LocacaoController@novocliente')->name('loc-novo-cliente');
    Route::post('/locacao/cadastrar-cliente','LocacaoController@novoclientePost')->name('loc-novo-cliente');
    Route::get('/locacao/editar-cliente','LocacaoController@verCliente')->name('loc-editar-cliente');
    Route::post('/locacao/editar-cliente','LocacaoController@editarcliente')->name('loc-editar-cliente');
    Route::get('/locacao/lista-cliente','LocacaoController@listaClietesAsPropri')->name('loc-lista-editar-cliente');
    Route::post('/locacao/editar-cliente/post','LocacaoController@editarclientePost')->name('loc-editar-cliente-post');
    Route::get('/locacao/editar-imovel','LocacaoController@editarimovel')->name('loc-editar-imovel');
    Route::post('/locacao/editar-imovel','LocacaoController@editarImovelPost')->name('loc-editar-imovel-post');

    //Venda
    Route::get('/venda/cadastrar-imovel','VendaController@novoimovel')->name('ven-novo-imovel');
    Route::post('/venda/cadastrar-imovel','VendaController@novoimovelPost')->name('ven-novo-imovel');
    Route::get('/venda/cadastrar-cliente','VendaController@novocliente')->name('ven-novo-cliente');
    Route::post('/venda/cadastrar-cliente','VendaController@novoclientePost')->name('ven-novo-cliente');
    Route::get('/venda/editar-cliente','VendaController@verCliente')->name('ven-editar-cliente');
    Route::post('/venda/editar-cliente','VendaController@editarcliente')->name('ven-editar-cliente');
    Route::get('/venda/lista-cliente','VendaController@listaClietesAsPropri')->name('ven-lista-editar-cliente');
    Route::post('/venda/editar-cliente/post','VendaController@editarclientePost')->name('ven-editar-cliente-post');
    Route::get('/venda/editar-imovel','VendaController@editarimovel')->name('ven-editar-imovel');
    Route::post('/venda/editar-imovel','VendaController@editarImovelPost')->name('ven-editar-imovel-post');

    //Página do Imóvel
    Route::get('/imovel','ImovelController@index')->name('imovel');
    Route::post('/imovel','ImovelController@enviar')->name('enviarWhats');
    Route::post('/interessados','ImovelController@novoInteressado')->name('interessados');
    Route::post('/interessados-salvar','ImovelController@interessadoSalva')->name('interessados-salvar');


    //Adicionar novo Gerenciado
    Route::get('/adicionar-gerenciador','GerenciadorController@index')->name('gerenciador');
    Route::post('/adicionar-gerenciador','GerenciadorController@cadastrar')->name('gerenciador');

    //Alterar senha
    Route::get('/alterar-senha','GerenciadorController@alterarSenha')->name('alterar-senha');
    Route::post('/alterar-senha','GerenciadorController@alterarSenhaPost')->name('alterar-senha');

    //Imprimir
    Route::get('/imprimir/nresidencial','ImprimirController@nresidencial')->name('imprimir-nresidencial');
    //Route::post('/imprimir/nresidencial','ImprimirController@imprimir')->name('imprimir-nresidencial');
    Route::get('/imprimir/residencial','ImprimirController@residencial')->name('imprimir-residencial');

    Route::get('/imprimir/locacao','ImprimirController@locacao')->name('imprimir-locacao');
    Route::post('/imprimir/locacao','ImprimirController@imprimirId')->name('imprimir-id');
    Route::get('/imprimir/venda','ImprimirController@venda')->name('imprimir-venda');
    Route::post('/imprimir/venda','ImprimirController@imprimirId')->name('imprimir-id-venda');


    //Imóvel Parado
    Route::get('/parados','ImovelParado@index')->name('imovel-parado');

});
