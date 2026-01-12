<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Gestión de equipos - Panel de administración">
    <title>Admin | Equipos</title>
    <link rel="stylesheet" href="{{ asset('css/admin/equipos.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/admin/dashboard/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <ul>
        <li><a href="{{ route('dashboard') }}">Panel de control</a></li>
        <li><a href="{{ route('admin.equipos') }}">Equipos</a></li>
        <li><a href="{{ route('admin.partidos') }}">Partidos</a></li>
        <li><a href="{{ route('admin.estadisticas') }}">Estadísticas</a></li>
    </ul>

    <a href="{{ route('perfil.usuario') }}">
        <img src="{{ asset('img/admin/dashboard/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main class="admin_equipos">

    <section class="equipos_intro">
        <h1>Gestión de equipos</h1>
        <p>Administración de los equipos del Club Básquet Bellreguard</p>
    </section>

    <section class="equipos_acciones">
        <button class="btn_principal">➕ Crear nuevo equipo</button>
    </section>

    <section class="equipos_tabla">

        <table>
            <thead>
                <tr>
                    <th>Equipo</th>
                    <th>Categoría</th>
                    <th>Entrenador</th>
                    <th>Jugadores</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Senior Masculino</td>
                    <td>Senior</td>
                    <td>Juan Pérez</td>
                    <td>15</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>Junior Masculino</td>
                    <td>Junior</td>
                    <td>Carlos Gómez</td>
                    <td>14</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>Cadete</td>
                    <td>Cadete</td>
                    <td>Laura Martínez</td>
                    <td>13</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

            </tbody>
        </table>

    </section>

</main>

<footer>
    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard · Panel de administración</p>
    </div>
</footer>

</body>
</html>
