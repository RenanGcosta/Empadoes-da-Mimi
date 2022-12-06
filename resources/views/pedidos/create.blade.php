@extends('layout.menu')

@section('title', 'Cadastrar Pedido')

@section('bars')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Pedido</h1>
        <p>Cliente: {{ $cliente->nome }}</p>
        <form class="row g-4" method="post" action="{{ route('pedidos.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ auth()->user()->id }}" name="id_user">
            <input type="hidden" value="{{ $cliente->id }}" name="id_cliente">
            {{-- <input type="hidden" value="" name="valor_total"> --}}
            <div class="row mb-4 mt-5">
                <div class="col">
                    <div>
                        <label for="empada" class="form-label fw-bold">Empada</label>

                        @foreach ($empadas as $empada)
                            <div>
                            <input type="checkbox" name="empada{{ $empada->id }}" value="{{ $empada->id }}"> {{ $empada->nome }} {{ $empada->tamanho->tamanho }} 
                               QTD: <input type="text" value="" name="quantidade{{ $empada->id }}"> 
                            </div>
                        @endforeach

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

                <div class="col">
                    <div>
                        <label for="descricao" class="form-label fw-bold">Descrição</label>
                        <input type="text" name="descricao" class="form-control form-control-lg bg-light" value=""
                            required>
                    </div>
                </div>
            </div>

            {{-- <div class="col">
                <div>
                    <label for="descricao" class="form-label">Valor</label>
                    <input type="text" name="valor_total" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div> --}}

            <label for="tamanho" class="form-label fw-bold">Pagamento</label>
            <select name="id_pagamento" id="id_pagamento" class="form-select form-select-lg bg-light" required>
                <option value="">--</option>
                @foreach ($pagamentos as $pagamento)
                    <option value="{{ $pagamento->id }}">{{ $pagamento->pagamento }}</option>
                @endforeach
            </select>


            <div>
                <button type="submit" class="btn btn-primary btn-lg">Fazer Pedido</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
    </div>
    </form>
@endsection
