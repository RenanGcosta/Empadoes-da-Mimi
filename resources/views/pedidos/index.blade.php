@extends('layout.menu')

@section('title', 'Listar Pedidos')

@section('bars')

    <h1>Todos os Pedidos</h1>
    {{-- <p>Pedidos:</p> --}}
    <a href="{{ route('clientes.index') }}" class="btn btn-warning position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaPedido" class="form-control form-control-lg" placeholder="exemplo: 1">
            <button class="btn btn-warning" type="submit">Procurar</button>
        </div>
        <a href="{{ route('pedidos.index') }}" class="btn btn-danger border btn-lg">Limpar</a>
    </form>


    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Código do Pedido</th>
                <th>Nome do Cliente</th>
                <th>Status</th>
                <th width='190'>Ação</th>
            </tr>
        </thead>

        @foreach ($pedidos as $pedido)
        <tr class="text-center">
            <td class="align-middle">{{ $pedido->id }}</td>
            <td class="align-middle">{{ $pedido->idCliente->nome }}</td>
            <td class="align-middle">{{ $pedido->status }}</td>
            {{-- <td class="align-middle">{{ $produto->valor }}</td> --}}
            <td class="align-middle text-center">
                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning" title="Editar"><i class="bi bi-pen"> Visualizar</i></a>
                {{-- <a href="" class="btn btn-danger" title="Excluir" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $produto->id }}"><i class="bi bi-trash"></i></a>
                @include('produtos.delete') --}}
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>

@endsection