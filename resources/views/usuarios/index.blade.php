@extends('layout.menu')

@section('title', 'Listar Produtos')

@section('bars')
    <h1>Usuários: </h1>
    @if(Session::get('sucesso'))
        <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
    @endif
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaUser" class="form-control form-control-lg" placeholder="exemplo: Alehandro">
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
                <th>Status</th>
                <th width='190'>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="text-center">
                    <td class="align-middle">{{ $user->id }}</td>
                    <td class="align-middle">{{ $user->nome }}</td>
                    <td class="align-middle">{{ $user->tipo }}</td>
                    <td class="align-middle">{{ $user->status }}</td>
                    <td class="align-middle text-center">
                            <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary" title="Editar"><i class="bi bi-pen"></i></a>
                            <a href="" class="btn btn-danger" title="Excluir" data-bs-toggle="modal" data-bs-target="#modal-deletar-{{ $user->id }}"><i class="bi bi-trash"></i></a>
                            @include('usuarios.delete')
                        </td>         
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection 
