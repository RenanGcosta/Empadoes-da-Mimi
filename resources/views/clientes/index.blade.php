@extends('layout.menu')

@section('title', 'Buscar Cliente')

@section('bars')

    <h1>Buscar Cliente</h1>
    <p>Total de Clientes Cadastrados: {{ $totalClientes }}</p>
    <a href="{{ route('clientes.create') }}" title="Cadastrar Novo Cliente" class="btn btn-warning position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i
            class="bi bi-file-earmark-person"></i></a>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaCliente" class="form-control form-control-lg" placeholder="Exemplo: alehandro">
            <button class="btn btn-warning" type="submit">Procurar</button>
        </div>
        <a href="{{ route('clientes.index') }}" class="btn btn-danger border btn-lg">Limpar</a>
    </form>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome do Cliente</th>
                <th>Telefone</th>
                <th width='190'>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr class="text-center">
                    <td class="align-middle">{{ $cliente->id }}</td>
                    <td class="align-middle">{{ $cliente->nome }}</td>
                    <td class="align-middle">{{ $cliente->telefone }}</td>
                    <td class="align-middle">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('pedidos.create', $cliente->id) }}" class="btn btn-warning" title="Fazer Pedido"><i
                                        class="bi bi-basket2"> Fazer Pedido</i></a>
                            </div>
                            <div class="col">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-danger"
                                    title="Editar"><i class="bi bi-pen"> Editar Cliente</i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
