@extends('layout.menu')

@section('title', 'Listar Produtos')

@section('bars')

    <h1>Produtos Cadastrados</h1>
    <p>Produtos Cadastrados: {{ $totalProdutos }}</p>
    @if (Session::get('sucesso'))
        <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
    @endif
    <a href="{{ route('produtos.create') }}" class="btn btn-warning position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaProduto" class="form-control form-control-lg" placeholder="exemplo: empada de frango">
            <button class="btn btn-warning" type="submit">Procurar</button>
        </div>
        <a href="{{ route('produtos.index') }}" class="btn btn-danger border btn-lg">Limpar</a>
    </form>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Produto</th>
                <th>Tamanho</th>
                <th>Valor: R$</th>
                <th width='190'>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr class="text-center">
                    <td class="align-middle">{{ $produto->id }}</td>
                    <td class="align-middle">{{ $produto->nome }}</td>
                    <td class="align-middle">{{ $produto->tamanho->tamanho }}</td>
                    <td class="align-middle">{{ $produto->valor }}</td>
                    <td class="align-middle text-center">
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning" title="Editar"><i class="bi bi-pen"></i></a>
                        <a href="" class="btn btn-danger" title="Excluir" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $produto->id }}"><i class="bi bi-trash"></i></a>
                        @include('produtos.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
