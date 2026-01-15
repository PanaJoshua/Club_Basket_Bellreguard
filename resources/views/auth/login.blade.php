@extends('plantilla')

@section('titulo', 'Login')
@section('contenido')
<main class="acceso">

    <section class="acceso_contenedor acceso_unico">

        <section class="login">
            <h1>Iniciar sesión</h1>
            <form action="#" method="post" class="form_login">

                <div class="campo">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>

                <div class="campo">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>

                <div class="opciones">
                    <label>
                        <input type="checkbox" name="recordar">
                        Recordar sesión
                    </label>
                </div>

                <a href="{{ route('admin.dashboard') }}" class="btn_principal">Entrar</a>

                <a href="#" class="enlace">¿Olvidaste la contraseña?</a>
                <a href="{{ route('registro') }}" class="enlace">¿No tienes cuenta? Regístrate</a>

            </form>
        </section>

    </section>

    <section class="acceso_info">
        <p>
            El acceso está reservado a entrenadores, administradores y usuarios
            registrados del Club Básquet Bellreguard
        </p>
    </section>

</main>

@endsection