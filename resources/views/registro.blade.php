<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Acceso y registro de usuarios del Club Básquet Bellreguard">
    <title>Acceso | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}"><img src="{{ asset('img/registro/logotipo.png') }}" alt="Logotipo del club"></a>
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
    <a href="{{ route('login') }}"><img src="{{ asset('img/registro/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main class="acceso">

    <section class="acceso_contenedor acceso_unico">

        <section class="registro">
            <h1>Crear cuenta</h1>

            <form action="#" method="post" class="form_registro">

                <div class="campo">
                    <input type="text" name="nombre" placeholder="Nombre completo" required>
                </div>

                <div class="campo">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>

                <div class="campo">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>

                <a href="{{ route('login') }}" class="btn_principal">Registrarse</a>

                <a href="{{ route('login') }}" class="enlace">¿Ya tienes cuenta? Inicia sesión</a>

            </form>
        </section>

    </section>

    <section class="acceso_info">
        <p>
            Crea una cuenta para acceder a funcionalidades exclusivas del
            Club Básquet Bellreguard
        </p>
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
                <a href="#"><img src="{{ asset('img/registro/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/registro/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
