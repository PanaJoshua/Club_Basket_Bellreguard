<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Equipos del Club Basquet Bellreguard">
    <title>Equipos | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/equipos.css') }}">
</head>
<body>

    <header>
        <a href="{{ route('inicio') }}"><img src="{{ asset('img/equipos/logotipo.png') }}" alt="Logotipo del club"></a>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('partidos') }}">Partidos</a></li>
            <li><a href="{{ route('calendario') }}">Calendario</a></li>
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
        </ul>
        <a href="{{ route('login') }}"><img src="{{ asset('img/equipos/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
    </header>

    <main>
        <section class="equipos_introduccion">
            <h1>Nuestros Equipos</h1>
            <p>Consulta la información de cada categoría y sus jugadores</p>
        </section>

        <section class="equipos_filtros">
            <button class="activo">Todos</button>
            <button>Infantil</button>
            <button>Cadete</button>
            <button>Junior</button>
            <button>Senior</button>
        </section>

        <section class="equipos_listado">

            <article class="equipo_card">
                <div class="equipo_imagen1"></div>
                <div class="equipo_info">
                    <span class="tag senior">Senior</span>
                    <h2>Senior Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen2"></div>
                <div class="equipo_info">
                    <span class="tag junior">Junior</span>
                    <h2>Junior Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen3"></div>
                <div class="equipo_info">
                    <span class="tag cadete">Cadete</span>
                    <h2>Cadete Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen4"></div>
                <div class="equipo_info">
                    <span class="tag infantil">Infantil</span>
                    <h2>Infantil Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen5"></div>
                <div class="equipo_info">
                    <span class="tag senior">Senior</span>
                    <h2>Senior Femenino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen6"></div>
                <div class="equipo_info">
                    <span class="tag junior">Junior</span>
                    <h2>Junior Femenino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla') }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

        </section>

        <section class="cta-equipos">
            <h2>¿Quieres formar parte del club?</h2>
            <p>Inscripciones abiertas para todas las categorías</p>
            <a href="#">Contactar con el club</a>
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
                    <a href="#"><img src="{{ asset('img/equipos/facebook.png') }}" alt="Facebook"></a>
                    <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/equipos/instagram.png') }}" alt="Instagram"></a>
                </div>
            </div>
        </div>
        
        <div class="footer-derechos">
            <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
        </div>
    </footer>

</body>
</html>
