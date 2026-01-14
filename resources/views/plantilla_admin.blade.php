<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    @vite('resources/css/plantilla_admin.css')
    @stack('styles')
</head>
<body>
@include('partials.nav_admin')

@yield('contenido')

<footer>
    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard · Panel de administración</p>
    </div>
</footer>

</body>
</html>