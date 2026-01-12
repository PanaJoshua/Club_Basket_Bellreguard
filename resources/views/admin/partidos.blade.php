<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Gestión de partidos - Panel de administración">
    <title>Admin | Partidos</title>
    <link rel="stylesheet" href="{{ asset('css/admin/partidos.css') }}">
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

<main class="admin_partidos">

    <section class="partidos_intro">
        <h1>Gestión de partidos</h1>
        <p>Administración de partidos, entrenamientos y eventos oficiales</p>
    </section>

    <section class="partidos_acciones">
        <button class="btn_principal">➕ Crear nuevo partido</button>
    </section>

    <section class="partidos_tabla">

        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Equipo</th>
                    <th>Rival</th>
                    <th>Tipo</th>
                    <th>Resultado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>10/03/2026</td>
                    <td>Senior Masculino</td>
                    <td>CB Gandía</td>
                    <td class="tipo partido">Partido</td>
                    <td>78 - 65</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>12/03/2026</td>
                    <td>Junior</td>
                    <td>—</td>
                    <td class="tipo entrenamiento">Entrenamiento</td>
                    <td>—</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>18/03/2026</td>
                    <td>Cadete</td>
                    <td>CB Oliva</td>
                    <td class="tipo partido">Partido</td>
                    <td>60 - 72</td>
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
