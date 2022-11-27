@extends('layout.menu')

@section('title', 'Dasboard')

@section('bars')


    <div class="text-bg-warning">
        <img src="/images/layout/logo.png" alt="mimi" height="150" class="rounded mx-auto d-block">
    </div>
     <br><br><br>
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display text-bg-danger">Bem-vindo(a)</h1>
        <h2 class="lead">Lanchonete em Paulo Afonso-BA</h2>
        <h2 class="lead">Aproveite o melhor empadão da região</h2>

        <p class="lead">
          <a class="btn btn-danger btn-lg" href="#" role="button">Whatsapp (75)94002-8922</a>
        </p>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/layout/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/layout/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/layout/logo.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

@endsection
