@extends('layout.menu')

@section('title', 'Listar Produtos')

@section('bars')
    <h1>Usuários: </h1>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaUsuario" class="form-control form-control-lg" placeholder="exemplo: Alehandro">
            <button class="btn btn-primary" type="submit">Procurar</button>
        </div>
        <a href="{{ route('usuarios.index') }}" class="btn btn-white border btn-lg">Limpar</a>
    </form>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo de usuário</th>
                <th width='190'>Ação</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($usuarios as $usuario)
                <tr class="text-center">
                    <td class="align-middle">{{ $usuario->id }}</td>
                    <td class="align-middle">{{ $usuario->nome }}</td>
                    <td class="align-middle">{{ $usuario->tipo }}</td>
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