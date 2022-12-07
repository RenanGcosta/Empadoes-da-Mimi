@extends('layout.menu')

@section('title', 'Cadastrar Pedido')

@section('bars')
    <div class="container-fluid shadow bg-white p-4 rounded">
         <h1>Pedido: {{ $pedido->id }}</h1>
        <p>Status atual: {{ $pedido->status }}</p> 

        <form class="row d-4" method="post" action="{{ route('pedidos.update', $pedido->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @csrf
            <div class="row mt-2 mb-2">
                <div class="col">
                    <div>
                        <label for="nome" class="form-label">Nome do Cliente</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->nome}}" disabled>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->telefone }}" placeholder="(DDD) XXXXX-XXXX" disabled>
                    </div>
                </div>

                <div class="col-3">
                    <div>
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->cep }}" placeholder="48000-000" disabled>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <div>
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->logradouro }}" disabled>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" name="bairro" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->bairro }}" disabled>
                    </div>
                </div>

                <div class="col-3">
                    <div>
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idCliente->cidade }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div>
                        <label for="" class="form-label">Tipo de Entrega</label>
                        <input type="text" name="descricao" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->entrega}}" disabled>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <label for="" class="form-label">Pagamento</label>
                        <input type="text" name="descricao" class="form-control form-control-lg bg-light"
                            value="{{ $pedido->idPedido->idPagamento->pagamento }}" disabled>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label for="status" class="form-label fw-bold">Status</label>
                        <select id="status" name="status" class="form-select form-select-lg bg-light" required>
                            <option value="Em Aberto">{{ $pedido->idPedido->status }}</option>
                            <option value="Cancelado">Cancelado</option>
                            <option value="Em Produção">Em Produção</option>
                            <option value="Saiu para Entrega">Saiu para Entrega</option>
                        </select>
                    </div>
                </div> 
            </div>
    <div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
       
                    <tr class="text-center">
                        {{-- <td class="align-middle">{{ $ped->id }}</td> --}}
                        <td class="align-middle">{{ $pedido->id }}</td>
                        <td class="align-middle">{{ $pedido->idEmpada->nome }}</td>
                        <td class="align-middle">{{ $pedido->idEmpada->idTamanho->tamanho }}</td> 
                        <td class="align-middle">{{ $pedido->quantidade }}</td>
                        {{-- <td class="align-middle">{{ }}</td> --}}
                        {{-- <td class="align-middle"> <input type="number" style="width:50px;" value="" name="quantidade{{ $pedido->id }}"> </td> --}}
                        {{-- <td class="align-middle">{{ $user->status }}</td> --}}        
                    </tr>

            </tbody>
        </table>

        <button type="submit" class="btn btn-warning btn-lg">Alterar Status</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-danger btn-lg">Voltar</a>
    </div>
    </div>
    </form>
@endsection
