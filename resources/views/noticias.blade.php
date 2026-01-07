<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Noticias del Club Básquet Bellreguard">
    <title>Noticias | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
</head>
<body>

<header>
    <a href="#"><img src="{{ asset('img/noticias/logotipo.png') }}" alt="Logotipo del club"></a>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Equipos</a></li>
        <li><a href="#">Estadísticas</a></li>
        <li><a href="#">Calendario</a></li>
        <li><a href="#">Tienda</a></li>
    </ul>
    <a href="#"><img src="{{ asset('img/noticias/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main>

    <section class="noticias_introduccion">
        <h1>Noticias del Club</h1>
        <p>Mantente al día con las novedades, resultados y eventos del Club Básquet Bellreguard.</p>
    </section>

    <section class="noticias_busqueda">
        <form class="buscador" action="#" method="get">
            <input type="text" name="buscar" placeholder="Buscar noticia...">
            <button type="submit">🔍</button>
        </form>
    </section>

    <section class="noticias_filtros">
        <button class="activo">Todas</button>
        <button>Partidos</button>
        <button>Eventos</button>
        <button>Club</button>
        <button>Lesiones</button>
    </section>

    <section class="noticias_listado">

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>Lesión de un jugador del cadete</h2>
                <time datetime="2025-11-04">04/11/2025</time>
                <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
            </div>
        </article>
        </a>

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>El primer equipo gana el partido</h2>
                <time datetime="2025-11-01">01/11/2025</time>
                <p>El equipo senior vence a Gandía en la final con una gran actuación.</p>
            </div>
        </article>
        </a>

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>Próximo partido contra el rival X</h2>
                <time datetime="2025-11-10">10/11/2025</time>
                <p>El club se prepara para un encuentro clave esta jornada.</p>
            </div>
        </article>
        </a>

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>Próximo partido contra el rival X</h2>
                <time datetime="2025-11-10">10/11/2025</time>
                <p>El club se prepara para un encuentro clave esta jornada.</p>
            </div>
        </article>
        </a>

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>Próximo partido contra el rival X</h2>
                <time datetime="2025-11-10">10/11/2025</time>
                <p>El club se prepara para un encuentro clave esta jornada.</p>
            </div>
        </article>
        </a>

        <a href="#" class="noticia_link">
        <article class="noticia_card">
            <div class="noticia_imagen"></div>
            <div class="noticia_contenido">
                <h2>Próximo partido contra el rival X</h2>
                <time datetime="2025-11-10">10/11/2025</time>
                <p>El club se prepara para un encuentro clave esta jornada.</p>
            </div>
        </article>
        </a>

    </section>

    <section class="noticias_mas">
        <button class="btn-cargar">Cargar más noticias</button>
    </section>

</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-columna">
            <h3>CLUB BÁSQUET BELLREGUARD</h3>
            <ul class="footer-links">
                <li><a href="#">Hazte patrocinador</a></li>
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información del club</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/noticias/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/noticias/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
