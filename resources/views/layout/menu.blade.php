<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a href=""><img src="" height="30" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ '/dashboard/index' }}">Home</a>
                    </li>

                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Usuários</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('usuarios.create') }}">Cadastrar novo</a></li>
                            <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Listar todos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Pedidos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('pedidos.create') }}">Novo Pedido</a></li>
                            <li><a class="dropdown-item" href="{{ route('pedidos.index') }}">Listar todos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Clientes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ '/clientes/index' }}">Listar todos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('produtos.create') }}">Cadastrar novo</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('produtos.index') }}">Listar todos</a></li>
                        </ul>
                    </li>
                        
                        
                            <li class="nav-item px-3">
                                <a class="nav-link" href="{{ route('clientes.create') }}">teste create cliente</a>
                            </li>


                    <li class="nav-item px-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Meu Perfil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="##">Editar Perfil</a></li>
                            <li><a class="dropdown-item" href="{{ '/login/index' }}">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-3 p-4 bg-white position-relative">
        @yield('bars')
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
