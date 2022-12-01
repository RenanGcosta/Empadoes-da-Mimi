@extends('layout.menu')

@section('title', 'Cadastrar Pedido')

@section('bars')
    <div class="container shadow bg-white p-4">
        <h1>Novo Pedido</h1>
        <form class="row g-4" method="post" action="{{ route('pedidos.store') }}" enctype="a">
            <input type="hidden" value="1" name="id_user">
            <div class="row mt-5 mb-4">
                <div class="col">
                    <div>

                        <label for="nome" class="form-label fw-bold">Nome do Cliente</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value="">
                        
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                            placeholder="(DDD) XXXXX-XXXX" required>
                    </div>
                </div>

                <div class="col-3">
                    <div>

                        <label for="nome" class="form-label fw-bold">CEP</label>

                        <label for="cep" class="form-label">CEP</label>

                        <input type="text" name="cep" class="form-control form-control-lg bg-light" value=""
                            placeholder="48000-000" required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="logradouro" class="form-label fw-bold">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="nome" class="form-label fw-bold">Bairro</label>

                        <input type="text" name="bairro" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

                <div class="col-3">
                    <div>
                        <label for="cidade" class="form-label fw-bold">Cidade</label>
                        <input type="text" name="cidade" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-4">
                    <div>

                        <label for="tamanho" class="form-label fw-bold">Tipo de Entrega</label>
                        <select name="tamanho" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="1">Receber em Casa</option>
                            <option value="2">Buscar no Estabelecimento</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
    <div class="container-fluid shadow bg-white p-4">
        <h1>Pedido</h1>
        <form class="row g-4" method="post" action="{{ route('pedidos.store') }}" enctype="a">
            <input type="hidden" value="1" name="id">
            <div class="row mb-4 mt-5">
                <div class="col">
                    <div>
                        <label for="empada" class="form-label fw-bold">Empada</label>
                        {{-- <select name="id_empada" id="id_empada" class="form-select form-select-lg bg-light" required> --}}
                            
                            @foreach ($empadas as $empada)
                              <input type="checkbox" name="empadas[]" value="{{ $empada->id }}"> {{ $empada->nome }} <br>
                              {{-- <option value="{{ $empada->id }}">{{ $empada->nome }}</option> --}}
                            @endforeach
                        {{-- </select>    --}}
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="tamanho" class="form-label fw-bold">Tamanho</label>
                        <select name="id_tamanho"  id="id_tamanho" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                        @foreach ($tamanhos as $tamanho)
                            <option value="{{ $tamanho->id }}">{{ $tamanho->tamanho }}</option>
                        @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-5">
                    <div>
                        <label for="entrega" class="form-label fw-bold">Tipo de Entrega</label>
                        <select name="entrega" class="form-select form-select-lg bg-light" required>
                            <option value="">--</option>
                            <option value="Delivery">Receber em Casa</option>
                            <option value="Retirada">Buscar no Estabelecimento</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label for="descricao" class="form-label fw-bold">Descrição</label>
                        <input type="text" name="descricao" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
            </div>

            <div class="col">
                    <div>
                        <label for="descricao" class="form-label">Valor</label>
                        <input type="text" name="valor_total" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>

            <div>
                <button type="submit" class="btn btn-primary btn-lg">Fazer Pedido</button>
                <a href="##" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
