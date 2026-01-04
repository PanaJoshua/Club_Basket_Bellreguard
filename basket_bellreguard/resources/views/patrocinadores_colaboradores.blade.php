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
    <a href="#"><img src="{{ asset('img/patrocinadores/logotipo.png') }}" alt="Logotipo del club"></a>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Equipos</a></li>
            <li><a href="#">Estadísticas</a></li>
            <li><a href="#">Calendario</a></li>
            <li><a href="#">Tienda</a></li>
        </ul>
    </nav>
    <a href="#"><img src="{{ asset('img/patrocinadores/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
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

        <h2>Patrocinadores principales</h2>

        <div class="patrocinadores_grid">

            <article class="patrocinador_card">
                <div class="patrocinador_logo"></div>
                <div class="patrocinador_info">
                    <h3>Deportes Bellreguard</h3>
                    <p>Tienda oficial del club</p>
                </div>
            </article>

            <article class="patrocinador_card">
                <div class="patrocinador_logo"></div>
                <div class="patrocinador_info">
                    <h3>Nombre</h3>
                    <a href="#" class="btn-patrocinador">Visitar web</a>
                </div>
            </article>

            <article class="patrocinador_card">
                <div class="patrocinador_logo"></div>
                <div class="patrocinador_info">
                    <h3>Nombre</h3>
                    <a href="#" class="btn-patrocinador">Visitar web</a>
                </div>
            </article>

            <article class="patrocinador_card">
                <div class="patrocinador_logo"></div>
                <div class="patrocinador_info">
                    <h3>Nombre</h3>
                    <a href="#" class="btn-patrocinador">Visitar web</a>
                </div>
            </article>

        </div>
    </section>

    <section class="colaboradores">

        <h2>Colaboran con nosotros</h2>

        <div class="colaboradores_grid">

            <article class="colaborador_card">
                <div class="colaborador_logo"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo"></div>
            </article>

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
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/patrocinadores/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/patrocinadores/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>