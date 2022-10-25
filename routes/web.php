<?php

use App\Http\Controllers\Filtro\FiltroCidadeEstadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pessoas\CadastrarPessoaController;
use App\Http\Controllers\Pessoas\DeletarPessoa;
use App\Http\Controllers\Pessoas\EditarPessoaController;
use App\Http\Controllers\Pessoas\PessoasController;
use App\Http\Controllers\Testes\TesteController;
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

// Route::get('/', function () {

// });

// Rotas de teste
Route::get('/teste', [TesteController::class, 'index'])->name('rota.teste');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cadastrar-pessoa', [PessoasController::class, 'index'])->name('cadastrar.pessoas');
Route::post('/cadastrar-pessoa', [CadastrarPessoaController::class, 'store'])->name('pessoa.salvar');

Route::get('/editar-pessoa/{id}', [EditarPessoaController::class, 'index'])->name('editar.pessoas');
Route::put('/editar-pessoa/{id}', [EditarPessoaController::class, 'edit'])->name('pessoa.editar');

Route::delete('/deletar-pessoa/{id}', [DeletarPessoa::class, 'destroy'])->name('pessoa.delete');


//Rotas de filtro

Route::post('/filtro-cidade-estado', [FiltroCidadeEstadoController::class, 'filter'])->name('filtro.cidade.estado');
