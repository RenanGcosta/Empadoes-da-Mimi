@extends('layout.menu')

@section('title', 'Alterar Usuário')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
        <h1 class="mb-5">Alterar Usuário</h1>
        <form class="row g-4" method="post" action="{{ route('usuarios.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" value="{{ $user->nome }}"
                            class="form-control form-control-lg bg-light" value="" required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" value="{{ $user->email }}"
                            class="form-control form-control-lg bg-light" value="" required>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-4">
                <div class="col">
                    <div>
                        <label for="senha" class="form-label">Senha</label>
                        <input id="password" type="password" name="password" class="form-control form-control-lg bg-light"
                            value="" required>
                    </div>
                </div>
                @can('acessar-usuarios')
                <div class="col">
                    <div>
                        <label for="tipo" class="form-label">Tipo</label>
                        <select id="tipo" name="tipo" class="form-select form-select-lg bg-light" value=""
                            required>
                            <option value="admin">Administrador</option>
                            <option value="simples">Simples</option>
                        </select>
                    </div>
                </div>
                @endcan
            </div>
            <div>
                <button type="submit" class="btn btn-warning btn-lg">Atualizar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
