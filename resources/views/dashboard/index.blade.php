@extends('layout.menu')

@section('title', 'Dashboard')

@section('bars')

        <img src="/images/layout/logo.png" alt="mimi" height="150" class="rounded mx-auto d-block">

        <br><br>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/pedidos.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <p class="card-title">Empadas:</p>
                      <p class="card-text">Exibir dados</p>
                    </div>
                    <div class="card-footer" style="background-color: #c90303">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/usuario.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Número de clientes da semana</h5>
                      <p class="card-text">Exibir dados</p>
                    </div>
                    <div class="card-footer" style="background-color: #09ff00">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/dinheiro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Faturamento semanal</h5>
                      <p class="card-text">Exibir dados</p>
                    </div>
                    <div class="card-footer" style="background-color: #1900ff">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
              </div>   
@endsection


