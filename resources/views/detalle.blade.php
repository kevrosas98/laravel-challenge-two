@include('templates.header')

<div class="row">
        <div class="col-md-2">
            <img src="{{ $detalle['imagen']  }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-10">
            <h1 class="border-bottom"><strong> {{ $detalle['nombre']  }}</strong></h1>
            
            <br>

            <strong>Descripción:</strong> 
            
            <br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptas fuga molestias ipsa nihil reprehenderit doloremque eveniet ex odio debitis minima obcaecati, nostrum nam fugiat laborum excepturi suscipit, ratione rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vitae, esse consequuntur animi soluta eveniet quasi accusantium laborum saepe doloremque perferendis maxime excepturi dicta quos voluptate molestiae error? Sit, numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptates commodi corrupti ad dolores laudantium cum, natus aspernatur atque in magni blanditiis corporis repellendus quisquam consequatur facilis sapiente reiciendis quibusdam!

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iusto sit excepturi necessitatibus totam enim perspiciatis culpa! Aut, facere. Repellendus ducimus facilis aperiam animi quas esse nostrum. Doloribus, sequi soluta!

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse aliquam dolorum voluptate? Aut nobis ex nostrum sed, perspiciatis earum illum ea magnam sit eius minus fuga minima, quidem, possimus vero! 

            <br><br>


            <strong>Precio:</strong>

            @foreach ($detalle['precio'] as $key => $pizzapr)

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="option1">
                <label class="form-check-label" for="exampleRadios">
                    {{ $detalle['precio'][$key]['tipo'] }} - S/ {{ $detalle['precio'][$key]['valor'] }}
                </label>
            </div>

            @endforeach


            <br>

            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button">-</button>
                <input type="text" class="form-control" value="1">
                <button class="btn btn-outline-secondary" type="button">+</button>
            </div>

            <br>

            <a class="btn btn-primary" href="#" role="button">Agregar al carrito</a>

        </div>
</div>

<h2 class="border-bottom mt-5">Pizzas que te pueden gustar</h2>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4 mt-1">

@if(shuffle($detallevm))

@foreach ($detallevm as $key => $pizza)

<div class="col">
    <div class="card mb-3">
    <img src="{{ $detallevm[$key]['imagenp'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $detallevm[$key]['nombre'] }}</h5>
        <p class="card-text">{{ $detallevm[$key]['description'] }}</p>
    </div>
    <div class="d-grid gap-2">
        <a href="{{ $detallevm[$key]['url'] }}" class="btn btn-primary">Ver Detalle</a>
    </div>
    </div>
</div>

@endforeach

@endif

</div>

@include('templates.footer')
