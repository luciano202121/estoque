@extends('layouts.main')

@section('titulo',$exibir->nome)

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="col-md-6">
                <img src="/img/produtos/{{ $exibir->imagem }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h3> Nome do produto: {{ $exibir->nome }} </h3>
                <p> Valor: {{ $exibir->valor }} </p>
                <p> Quantidade: {{ $exibir->quantidade }} </p>
                <p> Descrição: {{ $exibir->descricao }} </p>
                <a href="/produto/edit/{{ $exibir->id }}">
                 <input type="submit" class="btn btn-primary" value="Comprar">
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
