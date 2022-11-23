@extends('layout.menu')

@section('title', 'Listar Produtos')

@section('bars')

    <h1>Produtos Cadastrados</h1>
    <p>Total de Produtos:</p>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaProduto" class="form-control form-control-lg"
                placeholder="exemplo: empada de frango">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="##" class="btn btn-white border btn-lg">Limpar</a>
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
            <tr class="text-center">
                <td class="align-middle">01</td>
                <td class="align-middle">Empada de Frango e Queijo</td>
                <td class="align-middle">Médio</td>
                <td class="align-middle">12,90</td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary m-2">
                        <i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2">
                        <i class="bi bi-trash3"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
