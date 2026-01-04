<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Acceso y registro de usuarios del Club Básquet Bellreguard">
    <title>Acceso | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<header>
    <a href="#"><img src="{{ asset('img/login/logotipo.png') }}" alt="Logotipo del club"></a>
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
    <a href="#"><img src="{{ asset('img/login/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main class="acceso">

    <section class="acceso_contenedor">

        <section class="login">
            <h1>Iniciar sesión</h1>

            <form action="#" method="post" class="form_login">

                <div class="campo">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>

                <div class="campo">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>

                <div class="opciones">
                    <label>
                        <input type="checkbox" name="recordar">
                        Recordar sesión
                    </label>
                </div>

                <button type="submit" class="btn_principal">Entrar</button>

                <a href="#" class="enlace">¿Olvidaste la contraseña?</a>

            </form>
        </section>

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

                <button type="submit" class="btn_principal">Registrarse</button>

            </form>
        </section>

    </section>

    <section class="acceso_info">
        <p>
            El acceso está reservado a entrenadores, administradores y usuarios
            registrados del Club Básquet Bellreguard
        </p>
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
                <a href="#"><img src="{{ asset('img/login/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/login/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>