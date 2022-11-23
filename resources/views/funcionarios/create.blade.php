@extends('layout.menu')

@section('title', 'Cadastrar Funcionário')

@section('bars')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Funcionário</h1>
        <form class="row g-4" method="post" action="" enctype="a">
            <input type="hidden" value="1" name="id_user">
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Data de Nascimento</label>
                        <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="sexo" class="form-label fw-bold">Sexo</label>
                        <select name="sexo" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="cpf" class="form-label">Permissões de Administrador</label>
                        <select id="admin" name="admin" class="form-select form-select-lg bg-light"
                            value="" required>
                            <option value="">---</option>
                            <option value="">Sim</option>
                            <option value="">Não</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class='row mb-4'>
                <div class="col">
                    <div>
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                            placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="formFile" class="form-label">Foto</label>
                        <input name="foto" class="form-control form-control-lg" type="file" id="foto">
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <a href="##" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
