<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Rotas da home

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('academia/aluno', [App\Http\Controllers\AlunoController::class, 'index'])->name('index'); //rota de adição de alunos da home

Route::get('academia/aluno/detalhe', [App\Http\Controllers\DetalheController::class, 'index'])->name('detalhe'); //Rota do menu de opções da home


//Rotas do menu de alunos

Route::get('menu/aluno', [App\Http\Controllers\AlunoMenuController::class, 'index'])->name('aluno');


//Rotas do menu de mensalidade

Route::get('menu/mensalidade', [App\Http\Controllers\MensalidadeController::class, 'index'])->name('mensalidade'); //Rota do menu de mensalidade

Route::get('menu/mensalidade/servico', [App\Http\Controllers\ServicoController::class, 'index'])->name('servico'); // Rota da guia de serviços

Route::get('menu/mensalidade/servico/adicionar', [App\Http\Controllers\AddservicoController::class, 'index'])->name('addservico'); //Rota de adição de serviços

Route::get('menu/mensalidade/pagamento', [App\Http\Controllers\PagamentoController::class, 'index'])->name('pagamento'); //Rota da guia de mensalidades pagas


//Rotas do menu de acompanhamento

Route::get('menu/acompanhamento', [App\Http\Controllers\AcompanhamentoController::class, 'index'])->name('acompanhamento'); //Rota do menu de acompanhamento

Route::get('menu/acompanhamento/edit', [App\Http\Controllers\EditnovoController::class, 'index'])->name('edit'); //Rota da opção de iniciar novo acompanhamento


//Rotas do menu de produtos 

Route::get('menu/produto', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produto'); //Rota do menu de de produto

Route::get('menu/produto/store', [App\Http\Controllers\AddprodutoController::class, 'index'])->name('store'); //Rota de adicionar produto

Route::get('menu/produto/detalhe', [App\Http\Controllers\ProddetalheController::class, 'index'])->name('detalheprod'); //Rota de detalhe das opções do menu de produtos

Route::get('menu/produto/detalhe/edit', [App\Http\Controllers\ProdeditController::class, 'index'])->name('detalheedit'); //Rota da edição de detalhe do menu de produtos


//Rotas do menu de vendas

Route::get('menu/venda', [App\Http\Controllers\VendaController::class, 'index'])->name('venda');

Route::get('menu/venda/store', [App\Http\Controllers\AddvendaController::class, 'index'])->name('venda');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
