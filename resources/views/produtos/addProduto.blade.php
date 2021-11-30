@extends('layouts.main')

@section('titulo')

@section('conteudo')
<div class="conainer">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="/produto/addProduto" method="post" enctype="multipart/form-data">
                @csrf
                    <label for="Nome da imagem"> Imagem do produto</label>
                    <input type="file" name="imagem" id="imagem">
                    <div class="form-group">
                        <label for="name"> Nome </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="valor"> Valor </label>
                        <input type="text" class="form-control" name="valor" id="valor" placeholder="Digite seu valor">
                    </div>
                    <div class="form-group">
                        <label for="descrição"> Descrição </label>
                        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Digite sua descrição">
                    </div>
                    <div class="form-group">
                        <label for="quantidade"> Quantidade </label>
                        <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Digite a quantidade">
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-primary">


            </form>
        </div>
    </div>
</div>
@endsection
