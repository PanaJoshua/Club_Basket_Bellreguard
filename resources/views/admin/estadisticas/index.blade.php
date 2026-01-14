@extends('plantilla_admin')

@section('titulo', 'Estadisticas del equipo')
@section('contenido')

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

@endsection