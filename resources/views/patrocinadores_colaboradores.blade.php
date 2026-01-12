<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Patrocinadores y colaboradores del Club Básquet Bellreguard">
    <title>Patrocinadores | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/patrocinadores.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}"><img src="{{ asset('img/patrocinadores/logotipo.png') }}" alt="Logotipo del club"></a>
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
    <a href="{{ route('login') }}"><img src="{{ asset('img/patrocinadores/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main>
    <section class="patrocinadores_introduccion">
        <h1>Nuestros Patrocinadores y Colaboradores</h1>
        <p>
            Gracias al apoyo de nuestros patrocinadores y colaboradores,
            seguimos creciendo cada temporada
        </p>
    </section>

    <section class="patrocinadores_principales">

        <div class="patrocinadores_grid">

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo1"></div>
                <div class="patrocinador_info">
                    <h3>Nike</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo2"></div>
                <div class="patrocinador_info">
                    <h3>Adidas</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo3"></div>
                <div class="patrocinador_info">
                    <h3>Puma</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo4"></div>
                <div class="patrocinador_info">
                    <h3>Caixabank</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

        </div>
    </section>

    <section class="colaboradores">

        <h2>Colaboran con nosotros</h2>

        <div class="colaboradores_grid">

            <article class="colaborador_card">
                <div class="colaborador_logo1"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo2"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo3"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo4"></div>
            </article>

        </div>
    </section>

    <section class="hazte_patrocinador">
        <h2>¿Quieres apoyar al club?</h2>
        <p>Únete como patrocinador o colaborador y forma parte de nuestra familia.</p>
        <a href="#" class="btn-patrocinador">Hazte patrocinador</a>
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
                <a href="#"><img src="{{ asset('img/patrocinadores/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/patrocinadores/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
