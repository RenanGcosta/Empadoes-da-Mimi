@extends('layout.menu')

@section('title', 'Editar Produto')

@section('bars')
    <div class="container-fluid shadow bg-white p-4">
        <h1 class="mb-3">Editar Empada</h1>
        <form class="row d-4" method="post" action="{{ route('produtos.update', $empada->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="id">
            <input type="hidden" value="a" name="foto">
            <div class="row">
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Nome</label>
                    <input type="text" name="nome" value="{{ $empada->nome }}"
                        class="form-control form-control-lg bg-light" required>
                </div>
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Descrição</label>
                    <input type="text" name="descricao" value="{{ $empada->descricao }}"
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

          {{-- <div class="col"> 
                    <div>
                        <label for="tamanho" class="form-label fw-bold">Tamanho</label>
                        <select id="id_tamanho" name="id_tamanho" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            @foreach ($tamanhos as $tamanho)
                                <option value="{{ $empada->id_tamanho }}" @selected($tamanho->id == $empada->id_empada)>
                                    {{ $tamanho->tamanho }}</option>
                            @endforeach
                        </select>
                    </div>
                 </div>   --}}
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-md-2 m-2">Cadastrar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
    </div>
    </form>
@endsection
