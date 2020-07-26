@extends('layout')
@section('title', 'Editar Endereço')
@section('content')
    <div class="card mt-5">
        <h1 class="card-header">
            Adicionar Endereço
        </h1>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('endereco.update', $endereco->id) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" class="form-control" name="id_pais" value="1" />

                <div class="form-group">
                    <label for="nome_endereco">Nome Endereço:</label>
                    <input type="text" class="form-control" name="nome_endereco" value="{{ $endereco->nome_endereco }}" placeholder="Ex: Loja de veículos" />
                </div>
                <div class="form-group">
                    <label for="tipo_endereco">Tipo Endereço:</label>
                    <input type="text" class="form-control" name="tipo_endereco" value="{{ $endereco->tipo_endereco }}" placeholder="Ex: Comercial" />
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="nome_endereco">CEP:</label>
                    </div>
                    <div class="input-group form-group mb-1 col-md-4">

                        <input type="text" id="cep" class="form-control" name="cep" value="{{ $endereco->cep }}" placeholder="Ex: 81610-000" aria-label="Ex: 81610-000" aria-describedby="basic-addon2" required pattern="^\d{5}-\d{3}$" OnKeyPress="formatar('#####-###', this)" maxlength="9">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary buscacep" type="button">Buscar</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome_endereco">Rua:</label>
                    <input type="text" id="rua" class="form-control"  name="rua" value="{{ $endereco->rua }}" placeholder="Ex: Avenida Getúlio Vargas" required />
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="complemento">Complemento:</label>
                        <input type="text" id="complemento" class="form-control" name="complemento" value="{{ $endereco->complemento }}" placeholder="Ex: apto 21" />
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" class="form-control"  name="bairro" value="{{ $endereco->bairro }}" placeholder="Ex: Copacabana" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" class="form-control"  name="estado" value="{{ $endereco->estado }}" placeholder="Ex: RJ" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" class="form-control"  name="cidade" value="{{ $endereco->cidade }}" placeholder="Ex: Rio de Janeiro" required />
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-primary">Adicionar</button>
                <a href="{{ route('endereco.index') }}" class="btn btn-outline-secondary mr-2">Voltar</a>
            </form>
        </div>
    </div>
@endsection
