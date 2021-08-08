@include('templates.header')

<div class="bg-light p-5 rounded">
    <h1>Mi Cuenta</h1>
    <p class="lead">
        Bienvenido {{ session('usuario')['nombre'] }}
    </p>
</div>

<div class="row p-5">
    <div class="col-md-3">
        <h3>Mi Perfil</h3>
        <hr>
        <h3>Mis Pedidos</h3>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Pedido</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pedidosdata as $key => $pedido)

                <tr>
                    <th scope="row">{{ $pedido['numero'] }}</th>
                    
                    <td>
                    @foreach ($pedido['detalle'] as $key => $det)
                    {{ $pedido['detalle'][$key] }} <br>
                    @endforeach
                    </td>
                    
                    <td>S/ {{ $pedido['total'] }}</td>
                    <td>{{ $pedido['fecha'] }}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>



@include('templates.footer')