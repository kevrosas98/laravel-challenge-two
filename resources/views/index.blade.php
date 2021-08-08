@include('templates.header')

<h1 class="border-bottom">Nuestras promociones</h1>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4 mt-1">


@foreach ($pizzasdata as $key => $pizza)

<div class="col">
    <div class="card mb-3">
    <img src="{{ $pizzasdata[$key]['imagen'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $pizzasdata[$key]['nombre'] }}</h5>
        <p class="card-text">{{ $pizzasdata[$key]['description'] }}</p>
    </div>
    <div class="d-grid gap-2">
        <a href="{{ $pizzasdata[$key]['url'] }}" class="btn btn-primary">Ver Detalle</a>
    </div>
    </div>
</div>

@endforeach

</div>


@include('templates.footer')