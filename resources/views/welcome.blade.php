@extends('layouts.main')

@section('titulo','Principal')

@section('conteudo')

    <div class="col-md-12" id="events-container">
        <h2>Produtos</h2>
            <p class="subtitle">Detalhes</p>
                <div class="row" id="cards-container">
                    @foreach ( $produto as $produt )
                    <div class="card col-md-3">
                        <img src="/img/produtos/{{ $produt->imagem }}" alt={{ $produt->nome }}>
                        <div class="card body">
                            <h6>Item</h6>
                            <p class="card-title"> {{ $produt->nome }} </p>
                            <h6>Preço</h6>
                            <p class="card-text-valor">{{ $produt->valor }}</p>
                            <h6>Descrição</h6>
                            <p class="card-text-desc">{{ $produt->descricao }}</p>
                            <h6>Quantidade</h6>
                            <p class="card-qnt">{{ $produt->quantidade }}</p>
                            <a href="/produto/conteudo/{{ $produt->id }}">
                                <input type="submit" value="Veja o produto" class="btn btn-primary" id="botao-comprar">
                            </a>

                        </div>
                    </div>
                    @endforeach
                </div>
    </div>

@endsection
