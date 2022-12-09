@extends('layout.menu')

@section('title', 'Editar Produto')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
        <h1 class="mb-3">Editar Empada</h1>
        <form class="row d-4" method="post" action="{{ route('produtos.update', $empada->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="a" name="foto">
            <div class="row">
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Nome</label>
                    <input type="text" name="nome" value="{{ $empada->nome }}"
                        class="form-control form-control-lg bg-light" required>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col">
                    <div>
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" name="valor" value="{{ $empada->valor }}"
                            class="form-control form-control-lg bg-light" value="" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-lg col-md-2 m-2">Cadastrar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
    </div>
    </form>
@endsection
