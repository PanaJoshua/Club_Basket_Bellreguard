<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Detalle de producto del Club Básquet Bellreguard">
    <title>Producto | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/detalles_producto.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/detalles_producto/logotipo.png') }}" alt="Logotipo del club">
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
        <img src="{{ asset('img/detalles_producto/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <!-- DETALLE PRODUCTO -->
    <section class="producto_detalle">

        <div class="producto_imagen_grande"></div>

        <div class="producto_info_detalle">
            <h1>Camiseta oficial 25/26</h1>

            <p class="precio">25,00€</p>

            <p class="descripcion">
                Camiseta oficial del Club Básquet Bellreguard para la temporada
                2025 / 2026. Tejido transpirable, ligera y cómoda para entrenamientos
                y partidos.
            </p>

            <ul class="caracteristicas">
                <li><strong>Material:</strong> Poliéster</li>
                <li><strong>Tallas:</strong> XS · S · M · L · XL</li>
                <li><strong>Color:</strong> Rojo y blanco</li>
            </ul>

            <button class="btn-comprar">Añadir al carrito</button>

            <a href="{{ route('tienda') }}" class="volver">Volver a la tienda</a>
        </div>

    </section>

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
                <a href="#"><img src="{{ asset('img/detalles_producto/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/detalles_producto/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
