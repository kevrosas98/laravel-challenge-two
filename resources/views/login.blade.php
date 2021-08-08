@include('templates.header')

<h1 class="border-bottom">Iniciar Sesion</h1>

<form action="/login/validar" method="post">
@csrf
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="usuario" placeholder="Usuario" required>
        <label for="usuario">Usuario</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
        <label for="clave">Password</label>
    </div>
    
    <div class="pt-3 d-grid gap-2">
        <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
    </div>
    
</form>

@include('templates.footer')