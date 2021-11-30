<?php

use App\Http\Controllers\ProdutoController;
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
Route::get('/', [ProdutoController::class, 'inicio'])->name('mostrar.produtos');

Route::group(['prefix' => '/produto'], function(){
    Route::get('/produto', [ProdutoController::class, 'mostrar']);
    Route::post('/addProduto',[ProdutoController::class, 'store']);
    Route::get('/viewProdutos',[ProdutoController::class, 'index']);
    Route::get('/conteudo/{id}',[ProdutoController::class, 'show']);
    route::delete('/del/{id}', [ProdutoController::class, 'destroy']);
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
    Route::post('/comprar',[ProdutoController::class, 'pedidoDeProdutos']);
});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
