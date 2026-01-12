<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Plantilla de jugadores del Club Básquet Bellreguard">
    <title>Plantilla | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/plantilla/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <ul>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('noticias') }}">Noticias</a></li>
        <li><a href="{{ route('equipos') }}">Equipos</a></li>
        <li><a href="{{ route('partidos') }}">Partidos</a></li>
        <li><a href="{{ route('calendario') }}">Calendario</a></li>
        <li><a href="{{ route('tienda') }}">Tienda</a></li>
    </ul>

    <a href="{{ route('login') }}">
        <img src="{{ asset('img/plantilla/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <!-- INTRO -->
    <section class="plantilla_introduccion">
        <h1>Plantilla del Equipo</h1>
        <p>Jugadores del equipo · Temporada 2025 / 2026</p>
    </section>

    <!-- GRID JUGADORES -->
    <section class="plantilla_grid">

        <article class="jugador_card">
            <div class="jugador_foto1"></div>
            <h2>A. Torres</h2>
            <p><strong>Posición:</strong> Escolta</p>
            <p><strong>Dorsal:</strong> 7</p>
            <p><strong>Edad:</strong> 19</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto2"></div>
            <h2>M. López</h2>
            <p><strong>Posición:</strong> Base</p>
            <p><strong>Dorsal:</strong> 4</p>
            <p><strong>Edad:</strong> 20</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto3"></div>
            <h2>J. Carreño</h2>
            <p><strong>Posición:</strong> Alero</p>
            <p><strong>Dorsal:</strong> 12</p>
            <p><strong>Edad:</strong> 18</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto4"></div>
            <h2>T. García</h2>
            <p><strong>Posición:</strong> Pívot</p>
            <p><strong>Dorsal:</strong> 15</p>
            <p><strong>Edad:</strong> 21</p>
        </article>

    </section>

    <!-- VOLVER -->
    <section class="volver_equipos">
        <a href="{{ route('equipos') }}">Volver a equipos</a>
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
                <a href="#"><img src="{{ asset('img/plantilla/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/plantilla/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
