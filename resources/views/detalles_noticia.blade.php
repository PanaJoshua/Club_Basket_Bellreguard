<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Detalle de noticia del Club Básquet Bellreguard">
    <title>Detalle Noticia | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/detalles_noticia.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/detalles_noticia/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('partidos') }}">Partidos</a></li>
            <li><a href="{{ route('calendario') }}">Calendario</a></li>
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
        </ul>
    </nav>

    <a href="{{ route('login') }}">
        <img src="{{ asset('img/detalles_noticia/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <section class="noticia_banner">
    </section>

    <article class="noticia_detalle">

        <div class="noticia_meta">
            <time datetime="2025-03-06">📅 6 marzo 2025</time>
            <span>🏀 Cadete Masculino</span>
            <span>✍️ Redacción CBB</span>
        </div>

        <hr class="separador-noticia">

        <div class="noticia_texto">
            <p>
                El Club Básquet Bellreguard consiguió una importante victoria en la última jornada
                frente al conjunto de Gandía, en un partido muy disputado desde el inicio.
            </p>

            <p>
                El equipo cadete mostró una gran solidez defensiva y supo aprovechar sus oportunidades
                en ataque, manteniendo el control del marcador durante la mayor parte del encuentro.
            </p>

            <p>
                El cuerpo técnico destacó la actitud del grupo y el trabajo realizado durante la semana,
                clave para lograr este resultado positivo.
            </p>
        </div>

        <a href="{{ route('noticias') }}" class="btn-volver">Volver a noticias</a>

    </article>

    <section class="noticias_relacionadas">

        <h2>Otras noticias</h2>

        <div class="noticias_grid">

            <a href="{{ route('noticia.detalle', 1) }}" class="noticia_card">
                <div class="noticia_imagen1"></div>
                <div class="noticia_contenido">
                    <h3>Victoria del senior masculino</h3>
                    <small>📅 02/03/2025 · 🏀 Senior</small>
                    <p>El primer equipo consigue una victoria clave fuera de casa.</p>
                </div>
            </a>

            <a href="{{ route('noticia.detalle', 2) }}" class="noticia_card">
                <div class="noticia_imagen2"></div>
                <div class="noticia_contenido">
                    <h3>Nueva incorporación al club</h3>
                    <small>📅 25/02/2025 · 🏀 Club</small>
                    <p>El club anuncia la llegada de un nuevo jugador para la cantera.</p>
                </div>
            </a>

            <a href="{{ route('noticia.detalle', 3) }}" class="noticia_card">
                <div class="noticia_imagen3"></div>
                <div class="noticia_contenido">
                    <h3>Próximo partido en casa</h3>
                    <small>📅 20/02/2025 · 🏀 Cadete</small>
                    <p>El equipo cadete jugará este sábado en el pabellón municipal.</p>
                </div>
            </a>

        </div>
    </section>

</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-columna">
            <h3>CLUB BÁSQUET BELLREGUARD</h3>
            <ul class="footer-links">
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información del club</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/detalles_noticia/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/detalles_noticia/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
