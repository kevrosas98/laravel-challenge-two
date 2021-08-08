@include('templates.header')

<h1 class="border-bottom">Tiendas</h1>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

    @foreach ($tiendadata as $key => $pizzasTiens)

      <div class="feature col">

        <div class="feature-icon">
            <img src="https://image.freepik.com/vector-gratis/icono-color-rojo-3d-gps-que-cae-mapa-calle-blanco_175838-446.jpg"  height="90" alt="">
        </div>

        <h3>{{ $tiendadata[$key]['distrito'] }}</h3>
        <p>
        
            <strong>Dirección: </strong> {{ $tiendadata[$key]['direccion'] }}
            <br>
            <strong>Tel: </strong>  {{ $tiendadata[$key]['telefono'] }}

        </p>
   
      </div>

    @endforeach
    
    </div>

      

@include('templates.footer')
