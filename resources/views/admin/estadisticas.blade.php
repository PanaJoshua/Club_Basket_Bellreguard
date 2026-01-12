<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Gestión de estadísticas - Panel de administración">
    <title>Admin | Estadísticas</title>
    <link rel="stylesheet" href="{{ asset('css/admin/estadisticas.css') }}">
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

<main class="admin_estadisticas">

    <section class="estadisticas_intro">
        <h1>Gestión de estadísticas</h1>
        <p>Administración de estadísticas individuales por jugador y partido</p>
    </section>

    <section class="estadisticas_acciones">
        <button class="btn_principal">➕ Añadir estadísticas</button>
    </section>

    <section class="estadisticas_tabla">

        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Equipo</th>
                    <th>Partido</th>
                    <th>Puntos</th>
                    <th>Rebotes</th>
                    <th>Asistencias</th>
                    <th>Robos</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>A. Torres</td>
                    <td>Senior Masculino</td>
                    <td>CB Gandía</td>
                    <td>24</td>
                    <td>15</td>
                    <td>7</td>
                    <td>3</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>M. López</td>
                    <td>Junior</td>
                    <td>CB Oliva</td>
                    <td>16</td>
                    <td>8</td>
                    <td>5</td>
                    <td>2</td>
                    <td class="acciones">
                        <button class="btn_editar">Editar</button>
                        <button class="btn_eliminar">Eliminar</button>
                    </td>
                </tr>

                <tr>
                    <td>J. Fernández</td>
                    <td>Cadete</td>
                    <td>CB Sueca</td>
                    <td>11</td>
                    <td>6</td>
                    <td>4</td>
                    <td>1</td>
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
