@extends('layout.menu')

@section('title', 'Listar Produtos')

@section('bars')

    <h1>Produtos Cadastrados</h1>
    <p>Produtos Cadastrados: {{ $totalProdutos }}</p>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaProduto" class="form-control form-control-lg"
                placeholder="exemplo: empada de frango">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="{{ route('produtos.index') }}" class="btn btn-white border btn-lg">Limpar</a>
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
                    <td class="align-middle">
                        <button type="button" class="btn btn-primary m-2">
                            <i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2">
                            <i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
