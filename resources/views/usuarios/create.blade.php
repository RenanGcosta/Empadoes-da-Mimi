@extends('layout.menu')

@section('title', 'Cadastrar Usuário')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
        <h1>Cadastrar Usuário</h1>
        <form class="row g-4" method="post" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input id="name" type="text" name="nome" class="form-control form-control-lg bg-light" value=""required>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="email" class="form-label">E-mail</label>
                        <input id="email" type="text" name="email" class="form-control form-control-lg bg-light" value="" required>
                    </div>
                </div>
            </div>

                <div class="row mt-3 mb-4">
                    <div class="col">
                        <div>
                            <label for="senha" class="form-label">Senha</label>
                            <input id="password" type="password" name="password" class="form-control form-control-lg bg-light" value=""  required>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="tipo" class="form-label">Tipo</label>
                            <select id="tipo" name="tipo" class="form-select form-select-lg bg-light" value="" required>
                                <option value="admin">Administrador</option>
                                <option value="simples">Simples</option>
                            </select>
                        </div>
                    </div>
                </div>
           
                <div>
                    <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
            </div>
        </form>
@endsection
