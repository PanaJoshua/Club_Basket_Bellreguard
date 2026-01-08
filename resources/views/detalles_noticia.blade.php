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
        <a href="{{ route('inicio') }}"><img src="{{ asset('img/detalles_noticia/logotipo.png') }}" alt="Logotipo del club"></a>

        <nav>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('noticias') }}">Noticias</a></li>
                <li><a href="{{ route('equipos') }}">Equipos</a></li>
                <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
                <li><a href="{{ route('calendario') }}">Calendario</a></li>
                <li><a href="{{ route('tienda') }}">Tienda</a></li>
            </ul>
        </nav>

        <a href="{{ route('login') }}"><img src="{{ asset('img/detalles_noticia/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
    </header>

    <main>

        <section class="noticia_banner"></section>

        <article class="noticia_detalle">

            <h1>El equipo cadete logra hacer una victoria ante Gandía</h1>

            <div class="noticia_meta">
                <time datetime="2025-03-06">6 marzo 2025</time>
                <span>Cadete Masculino</span>
            </div>

            <div class="noticia_texto">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque habitant morbi tristique senectus et netus et malesuada.
                </p>

                <p>
                    Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
                </p>

                <p>
                    Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                </p>
            </div>

            <a href="#" class="btn-volver">Volver a noticias</a>

        </article>

        <section class="noticias_relacionadas">

            <h2>Otras noticias</h2>

            <div class="noticias_grid">

                <a href="#" class="noticia_card">
                    <div class="noticia_imagen"></div>
                    <div class="noticia_contenido">
                        <h3>Título de la noticia</h3>
                        <p>Breve descripción de la noticia relacionada.</p>
                    </div>
                </a>

                <a href="#" class="noticia_card">
                    <div class="noticia_imagen"></div>
                    <div class="noticia_contenido">
                        <h3>Título de la noticia</h3>
                        <p>Breve descripción de la noticia relacionada.</p>
                    </div>
                </a>

                <a href="#" class="noticia_card">
                    <div class="noticia_imagen"></div>
                    <div class="noticia_contenido">
                        <h3>Título de la noticia</h3>
                        <p>Breve descripción de la noticia relacionada.</p>
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
                <li><a href="#">Hazte patrocinador</a></li>
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
