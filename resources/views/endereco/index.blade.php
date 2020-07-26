@extends('layout')
@section('title', 'Listagem de Endereços')
@section('content')

    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>

    <h1>Endereços</h1>

    <div class="col-md-12 text-right">
        <a href="{{ route('endereco.create') }}" class="btn btn-success">Cadastrar</a>
    </div>
    <div class="mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Tipo</td>
                    <td>Bairro</td>
                    <td>Cidade</td>
                    <td>UF</td>
                    <td style="width: 20%;" align="center">Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                    <tr>
                        <td>{{ $endereco->id }}</td>
                        <td>{{ $endereco->nome_endereco }}</td>
                        <td>{{ $endereco->tipo_endereco }}</td>
                        <td>{{ $endereco->bairro }}</td>
                        <td>{{ $endereco->cidade }}</td>
                        <td>{{ $endereco->estado }}</td>
                        <td align="center">
                            <form action="{{ route('endereco.destroy', $endereco->id) }}" method="post" class="float-right  ">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                            <a href="{{ route('endereco.edit', $endereco->id) }}" class="btn btn-primary float-right mr-2">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
