@extends('plantilla_admin')

@section('titulo', 'Partidos')
@push('styles')
    @vite('resources/css/admin/partidos.css')
@endpush
@section('contenido')

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

@endsection