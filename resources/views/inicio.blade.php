<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Landing Page del Club Basquet Bellreguard">
    <title>Club Basquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/inicio/logotipo.png') }}" alt="Logotipo del club">
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
        <img src="{{ asset('img/inicio/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <div class="inicio_banner">
        <h1>Bienvenido al Club Básquet Bellreguard</h1>
        <a href="{{ route('calendario') }}">Ver próximos partidos</a>
    </div>

    <section class="datos-club">
        <div class="dato">
            <p class="numero">25+</p>
            <p>Años de historia</p>
        </div>
        <div class="dato">
            <p class="numero">8</p>
            <p>Equipos</p>
        </div>
        <div class="dato">
            <p class="numero">120</p>
            <p>Jugadores</p>
        </div>
        <div class="dato">
            <p class="numero">15</p>
            <p>Títulos</p>
        </div>
    </section>

    <section class="proximo-partido">
        <h2>Próximo partido</h2>

        <div class="partido-card">
            <div class="equipos-partido">
                <p class="equipo">CB Bellreguard</p>
                <span>VS</span>
                <p class="equipo">Valencia Basket</p>
            </div>

            <div class="partido-info">
                <p>📅 Sábado 15 Febrero</p>
                <p>⏰ 18:30</p>
                <p>📍 Pabellón Municipal Bellreguard</p>
            </div>

            <a href="{{ route('calendario') }}">Ver calendario</a>
        </div>
    </section>

    <div id="tabular">

        <div class="noticias">
            <h2>Noticias destacadas</h2>

            <a href="{{ route('noticia.detalle', 1) }}" class="noticia-link">
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/pierna_rota.jpg') }}" alt="">
                    <div class="texto-noticia">
                        <p>Lesión grave en el último partido</p>
                        <p>Juan Pérez estará de baja 3 meses tras el partido contra Valencia.</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('noticia.detalle', 2) }}" class="noticia-link">
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/equipo_celebrando.jpg') }}" alt="">
                    <div class="texto-noticia">
                        <p>Victoria histórica en la liga</p>
                        <p>Victoria por 95-78 contra el líder de la liga.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="equipos">
            <p>Equipos destacados</p>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/senior.png') }}" alt="">
            </a>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/junior.png') }}" alt="">
            </a>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/infantil.png') }}" alt="">
            </a>
        </div>

    </div>

    <div id="patrocinadores">
        <p>Patrocinadores</p>

        <a href="https://www.nike.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/nike.png') }}" alt="">
            <p><strong>NIKE</strong></p>
            <p>Patrocinador Oficial</p>
        </a>

        <a href="https://www.motorola.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/motorola.png') }}" alt="">
            <p><strong>MOTOROLA</strong></p>
            <p>Patrocinador Tecnológico</p>
        </a>

        <a href="https://valenciabasket.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/valencia basket.png') }}" alt="">
            <p><strong>VALENCIA BASKET</strong></p>
            <p>Club Asociado</p>
        </a>
    </div>

    <div class="noticias_mas">
        <a href="{{ route('patrocinadores') }}">Ver patrocinadores y colaboradores</a>
    </div>

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
                <a href="#"><img src="{{ asset('img/inicio/facebook.png') }}"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/inicio/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
