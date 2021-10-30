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

Route::middleware('login')->prefix('logged')->group(function (){
    //Home
    Route::get('/home','HomeController@index')->name('home');
    Route::post('/home','HomeController@busca')->name('home');
    Route::get('/logout', 'LoginController@sair')->name('sair');

    //Cliente
    Route::get('/lista-cliente','ClienteController@index')->name('cliente');
    Route::get('/cadastro-rapido-busca','ClienteController@busca')->name('cliente-busca');
    Route::get('/lista-cliente/editar','ClienteController@editar')->name('cliente-editar');

    // Cadastros Locação
    Route::get('/locacao/cadastrar-imovel','LocacaoController@novoimovel')->name('loc-novo-imovel');
    Route::post('/locacao/cadastrar-imovel','LocacaoController@novoimovelPost')->name('loc-novo-imovel');
    Route::get('/locacao/cadastrar-cliente/{id?}','LocacaoController@novocliente')->name('loc-novo-cliente');
    Route::post('/locacao/cadastrar-cliente','LocacaoController@novoclientePost')->name('loc-novo-cliente');
    //Editar Locação
    Route::post('/locacao/editar-imovel/{id?}','LocacaoController@editarimovel')->name('loc-editar-imovel');
    Route::post('/locacao/editar-cliente/{id?}','LocacaoController@editarcliente')->name('loc-editar-cliente');

    //Venda
    Route::get('/venda/cadastrar-imovel','VendaController@novoimovel')->name('ven-novo-imovel');
    Route::post('/venda/cadastrar-imovel','VendaController@novoimovelPost')->name('ven-novo-imovel');
    Route::get('/venda/cadastrar-cliente','VendaController@novocliente')->name('ven-novo-cliente');
    Route::post('/venda/cadastrar-cliente','VendaController@novoclientePost')->name('ven-novo-cliente');

    //Página do Imóvel
    Route::get('/imovel','ImovelController@index')->name('imovel');

    //Adicionar novo Gerenciado
    //Alterar senha

});
