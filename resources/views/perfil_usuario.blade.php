<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Perfil de usuario del Club Básquet Bellreguard">
    <title>Perfil | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/perfil_usuario.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/perfil/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <ul>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('noticias') }}">Noticias</a></li>
        <li><a href="{{ route('equipos') }}">Equipos</a></li>
       <li><a href="{{ route('partidos') }}">Partidos</a></li>
        <li><a href="{{ route('calendario') }}">Calendario</a></li>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
    </ul>

    <a href="{{ route('perfil.usuario') }}">
        <img src="{{ asset('img/perfil/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <section class="perfil_introduccion">
        <h1>Mi perfil</h1>
        <p>Gestiona tu información personal y preferencias</p>
    </section>

    <section class="perfil_contenedor">

        <!-- TARJETA PERFIL -->
        <article class="perfil_card">

            <div class="perfil_avatar">
                <img src="{{ asset('img/perfil/jugador1.png') }}" alt="Avatar usuario">
            </div>

            <h2>Joshua Fernández</h2>
            <p class="rol">Usuario registrado</p>

            <ul class="perfil_datos">
                <li><strong>Email:</strong> joshua@email.com</li>
                <li><strong>Miembro desde:</strong> 2024</li>
            </ul>

        </article>

        <!-- ACCIONES -->
        <article class="perfil_opciones">

            <h3>Opciones de cuenta</h3>

            <a href="#" class="opcion">Editar perfil</a>
            <a href="#" class="opcion">Cambiar contraseña</a>
            <a href="{{ route('inicio') }}" class="opcion cerrar">Cerrar sesión</a>

        </article>

    </section>

</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-columna">
            <h3>CLUB BÁSQUET BELLREGUARD</h3>
            <ul class="footer-links">
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/perfil/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/perfil/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
