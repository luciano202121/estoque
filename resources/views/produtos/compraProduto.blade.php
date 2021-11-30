@extends('layouts.main')

@section('titulo')

@section('conteudo')
<div class="conainer">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/produtos/{{ $produto->imagem }}" class="img-fluid" alt="{{ $produto->nome }}">
        </div>
        <div class="col-md-6">
            <form action="/produto/comprar" method="post" enctype="multipart/form-data" class="form-compra-produto">
                @csrf
                    <div class="form-group">
                        <label for="name"> Nome </label>
                        <input type="hidden" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" value="{{ $produto->nome }}">
                        <p> {{ $produto->nome }}</p>
                    </div>
                    <div class="form-group">
                        <label for="valor"> Valor </label>
                        <input type="hidden" class="form-control" name="valor" id="valor" placeholder="Digite seu valor" value="{{ $produto->valor }}">
                        <p>{{ $produto->valor }}</p>
                    </div>
                    <div class="form-group">
                        <label for="descrição"> Descrição </label>
                        <input type="hidden" class="form-control" name="descricao" id="descricao" placeholder="Digite sua descrição" value="{{ $produto->descricao }}">
                        <p>{{ $produto->descricao }}</p>
                    </div>
                    <div class="form-group">
                        <label for="quantidade"> Quantidade </label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control">
                    </div>
                        <input type="hidden" name="id" id="id" value="{{ $produto->id }}">
                    <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
