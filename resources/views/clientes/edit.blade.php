@extends('layout.menu')

@section('title', 'Alterar Cliente')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
        <h1 class="mb-5">Editar dados do Cliente</h1>
        <form class="row g-4" method="post" action="{{ route('clientes.update', $cliente->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mt-3 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" value="{{ $cliente->nome }}"
                            class="form-control form-control-lg bg-light" value="" required>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light"
                            value="{{ $cliente->telefone }}" placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-control form-control-lg bg-light"
                        value="{{ $cliente->cep }}" placeholder="48000-000" required>
                </div>
                <div class="col-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control form-control-lg bg-light"
                        value="{{ $cliente->cidade }}" required>
                </div>
                <div class="col-3">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" name="logradouro" class="form-control form-control-lg bg-light"
                        value="{{ $cliente->logradouro }}" required>
                </div>
                <div class="col-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control form-control-lg bg-light"
                        value="{{ $cliente->bairro }}" required>
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-warning btn-lg">Atualizar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
