@extends('layout.menu')

@section('title', 'Listar Pedidos')

@section('bars')

    <h1>Todos os Pedidos</h1>

    <p>Pedidos:</p>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaPedido" class="form-control form-control-lg"
                placeholder="pesquisar código do pedido">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="##" class="btn btn-white border btn-lg">Limpar</a>
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

        <tbody>
            <tr class="text-center">
                <td class="align-middle">01</td>
                <td class="align-middle">456</td>
                <td class="align-middle">Em preparação</td>

                <td class="align-middle">
                    <button type="button" class="btn btn-danger m-2">
                        <i class="bi bi-pen"></i></button>
                     
                </td>
            </tr>
        </tbody>
    </table>

@endsection
