@extends('layout.menu')

@section('title', 'Cadastrar Cliente')

@section('bars')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Novo Cliente</h1>
        <form class="row g-4" method="post" action="{{ route('clientes.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="1" name="id">
            <input type="hidden" value="{{ auth()->user()->id }}" name="id_user">
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome do Cliente</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                            placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>

                <div class="col-3">
                    <div>
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control form-control-lg bg-light" value=""
                            placeholder="48000-000" required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" name="bairro" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col-3">
                    <div>
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-lg">Avançar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
