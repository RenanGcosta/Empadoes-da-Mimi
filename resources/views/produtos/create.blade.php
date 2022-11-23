@extends('layout.menu')

@section('title', 'Cadastrar Empadas')

@section('bars')
    <div class="container-fluid shadow bg-white p-4">
        <h1 class="mb-3">Cadastrar Empada</h1>
        <form class="row d-4" method="post" action="" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="1" name="id_user">
            <div class="row">
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Nome</label>
                    <input type="text" class="form-control form-control-lg bg-light" id="nome" name="nome"
                        required>
                </div>
                <div class="col mb-4">
                    <label for="nome" class="form-label fs-5 fs-5">Descrição</label>
                    <input type="text" class="form-control form-control-lg bg-light" id="nome" name="nome"
                        required>
                </div>
            </div>

            <div class="row mt-2 mb-4">
                <div class="col">
                    <div>
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" name="valor" placeholder="R$" class="form-control form-control-lg bg-light"
                            value="" required>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="sexo" class="form-label fw-bold">Tamanho</label>
                        <select name="sexo" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="p">Pequena</option>
                            <option value="m">Grande</option>
                            <option value="g">Média</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <label for="foto" class="form-label fs-5">Foto</label>
                <input type="file" class="form-control form-control-lg bg-light mb-5" id="foto" name="foto">
                <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
            </div>

            <button type="submit" class="btn btn-primary btn-lg col-md-2 m-2">Cadastrar</button>
            <a href="" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
    </div>
    </form>
@endsection
