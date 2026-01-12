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
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/noticias/logotipo.png') }}" alt="Logotipo del club">
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
        <img src="{{ asset('img/noticias/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <section class="noticias_introduccion">
        <h1>Noticias del Club</h1>
        <p>Mantente al día con las novedades, resultados y eventos del Club Básquet Bellreguard.</p>
    </section>

    <section class="noticias_busqueda">
        <form class="buscador">
            <input type="text" placeholder="Buscar noticia...">
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

        <a href="{{ route('noticia.detalle', 1) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen1"></div>
                <div class="noticia_contenido">
                    <span class="tag lesion">Lesión</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia.detalle', 2) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen2"></div>
                <div class="noticia_contenido">
                    <span class="tag partido">Partido</span>
                    <time>01/11/2025</time>
                    <h2>El primer equipo gana el partido</h2>
                    <p>El equipo senior vence a Gandía con una gran actuación colectiva.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia.detalle', 3) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen3"></div>
                <div class="noticia_contenido">
                    <span class="tag evento">Evento</span>
                    <time>10/11/2025</time>
                    <h2>Próximo partido contra el rival X</h2>
                    <p>El club se prepara para un encuentro clave esta jornada.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia.detalle', 4) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen4"></div>
                <div class="noticia_contenido">
                    <span class="tag club">Club</span>
                    <time>04/12/2025</time>
                    <h2>Cambios recientes en cuanto a clubes</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia.detalle', 5) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen5"></div>
                <div class="noticia_contenido">
                    <span class="tag lesion">Lesión</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia.detalle', 6) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen6"></div>
                <div class="noticia_contenido">
                    <span class="tag evento">Evento</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

    </section>

    <section class="noticias_mas">
        <button>Cargar más noticias</button>
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
                <a href="#"><img src="{{ asset('img/noticias/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/noticias/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
