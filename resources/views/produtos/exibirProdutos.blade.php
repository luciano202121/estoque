@extends('layouts.main')

@section('titulo','Exibição de produtos')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Produto </th>
                            <th> Preço </th>
                            <th> descrição </th>
                            <th> Quantidade </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buscar as $busca)
                            <td>{{$loop->index + 1}}</td>
                            <td> {{ $busca->nome }}      </td>
                            <td> {{ $busca->valor }}      </td>
                            <td> {{ $busca->descricao }}      </td>
                            <td> {{ $busca->quantidade }}      </td>
                            <td>
                                <a href="#" class="btn btn-success" id="buttons"> Editar </a>
                                <form action="/produto/del/{{ $busca->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Deletar" class="btn btn-danger" id="buttons">
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
