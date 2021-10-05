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

    //Modal de cadatro rápido de clientes

    //Locação
    Route::get('/locacao/cadastrar-imovel','LocacaoController@novoimovel')->name('loc-novo-imovel');
    Route::get('/locacao/cadastrar-cliente','LocacaoController@novocliente')->name('loc-novo-cliente');

    //Venda
    Route::get('/venda/cadastrar-imovel','VendaController@novoimovel')->name('ven-novo-imovel');
    Route::get('/venda/cadastrar-cliente','VendaController@novocliente')->name('ven-novo-cliente');

    //Adicionar novo Gerenciado
    //Alterar senha

});
