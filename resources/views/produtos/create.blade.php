@extends('layout.menu')

@section('title', 'Cadastrar Empadas')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
        <h1 class="mb-3">Cadastrar Empada</h1>
        <form class="row d-4" method="post" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="1" name="id">
            <input type="hidden" value="a" name="foto">

            <div class="row">
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Nome</label>
                    <input type="text" class="form-control form-control-lg bg-light" name="nome" required>
                </div>
            </div>

            <div class="row mt-2 mb-4">
                <div class="col">
                    <div>
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" name="valor" placeholder="R$" class="form-control form-control-lg bg-light"
                            value="" required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="tamanho" class="form-label fw-bold">Tamanho</label>
                        <select id="id_tamanho" name="id_tamanho" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            @foreach ($tamanhos as $tamanho)
                                <option value="{{ $tamanho->id }}">{{ $tamanho->tamanho }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-warning btn-lg col-md-2 m-2">Cadastrar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
    </div>
    </form>
@endsection
