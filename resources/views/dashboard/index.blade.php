@extends('layout.menu')

@section('title', 'Home')

@section('bars')

        <body style="background-color: #dddddd">
          
        <img src="/images/layout/logo2.png" alt="mimi" height="150" class="rounded mx-auto d-block">

        <br><br><br><br>

        <div class="row row-cols-1 row-cols-md-3 g-4 mybackground">
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <p class="card-title">Número de pedidos em aberto: {{ $status }}</p>
                    </div>
                    <div class="card-footer" style="background-color: #c94203">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <p class="card-title">Número de clientes cadastrados: {{ $totalClientes }}</p>
                    </div>
                    <div class="card-footer" style="background-color: #1900ff">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="/images/layout/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <p class="card-title">Faturamento dos ultimos 60 dias: {{ $totalPagamentos }}</p>
                      <p class="card-title">Faturamento dos ultimos 30 dias: {{ $mes }}</p>
                      <p class="card-title">Faturamento dos ultimos 7 dias: {{ $totalPagamentos }}</p>
                    </div>
                    <div class="card-footer" style="background-color: #09ff00">
                      <small class="text-muted"> </small>
                    </div>
                  </div>
                </div>
              </div>   
            </body>      
@endsection


