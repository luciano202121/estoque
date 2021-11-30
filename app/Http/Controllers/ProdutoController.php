<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\UserOrder;

class ProdutoController extends Controller
{

    public function store(Request $request){
        $insert = new Produto;
        $insert->nome = $request->nome;
        $insert->valor = $request->valor;
        $insert->descricao = $request->descricao;
        $insert->quantidade = $request->quantidade;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid())
        {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemName = md5($requestImagem->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $requestImagem->move('img/produtos', $imagemName);

            $insert->imagem = $imagemName;
        }

        $insert->save();

        return redirect('/')->with('msg','Produto adicionado com sucesso');

    }

    public function exibir(){
        return view('produtos.exibirProdutos');
    }

    public function index(){
        $buscar = Produto::all();
        return view('produtos.exibirProdutos', ['buscar' => $buscar]);
    }

    public function show($id){
        $exibir = Produto::findOrfail($id);
        return view('produtos.detalhes', ['exibir' => $exibir]) ;
    }

    public function mostrar(){
        return view('produtos.addProduto');
    }

    public function inicio(){
        $produto = Produto::all();
        return view('welcome', ['produto' => $produto]);
    }

    public function destroy($id){
        Produto::findOrFail($id)->delete();
        return redirect('/')->with('msg','Produto excluido com sucesso');
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.compraProduto', ['produto' => $produto]);
    }

    public function verificarEstoque($id){
        $produto = Produto::find($id);
    }

    public function pedidoDeProdutos(Request $request){

        $item = new UserOrder;
        $item->nome = $request->nome;
        $item->valor = $request->valor;
        $item->descricao = $request->descricao;
        $item->quantidade = $request->quantidade;

        $item->save();

        return redirect('/')->with('msg','item comprado com sucesso');

    }


}
