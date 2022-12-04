@extends('layout.menu')

@section('title', 'Buscar Cliente')

@section('bars')

    <h1>Buscar Cliente</h1>

    <p>Total de Clientes Cadastrados:  {{ $totalClientes }}</p>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaPedido" class="form-control form-control-lg"
                placeholder="Alehandro">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="##" class="btn btn-white border btn-lg">Limpar</a>
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
                    <a href="{{ route('pedidos.create') }}" class="btn btn-success" title="Fazer Pedido" ><i class="bi basket2"></i></a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary" title="Editar"><i class="bi bi-pen"></i></a>    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
