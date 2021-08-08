<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizzeria - Laravel Reto</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" >

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
  <header class="py-3 mb-4 border-bottom">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        
        <img src="https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/4/2019/03/0080_h_pizza-house-logo_13.png" alt="Pizza" height="45" >
        

        <div class="d-flex flex-wrap justify-content-center">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav"> 
          <li class="nav-item"><a href="/" class="nav-link @if(request()->is('/')) active @endif" aria-current="page">Inicio</a></li>
          <li class="nav-item"><a href="{{ route('tiendas') }}" class="nav-link" aria-current="page">Tiendas</a></li>
          @if(session('usuario')['nombre'] != "")
          <li class="nav-item"><a href="/clientes/pedidos" class="nav-link" aria-current="page">Mis Pedidos</a></li>
          <li class="nav-item"><a href="/login/salir" class="nav-link" aria-current="page"><strong>Bienvenido {{ session('usuario')['nombre'] }} | Salir</strong></a></li>
          @else
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" aria-current="page">Mi Cuenta</a></li>
          @endif
          </ul>
        </div>
        
        </div>

        </div>
        

    </nav>  

  </header>
 
  <main class="container">