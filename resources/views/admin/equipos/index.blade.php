@extends('plantilla_admin')

@section('titulo', 'Equipos del club')
@push('styles')
    @vite('resources/css/admin/equipos.css')
@endpush
@section('contenido')

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

@endsection