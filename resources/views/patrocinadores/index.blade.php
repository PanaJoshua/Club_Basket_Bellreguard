@extends('plantilla')

@section('titulo', 'Patrocinadores y Colaboradores del club')
@push('styles')
    @vite('resources/css/patrocinadores.css')
@endpush
@section('contenido')

<main>
    <section class="patrocinadores_introduccion">
        <h1>Nuestros Patrocinadores y Colaboradores</h1>
        <p>
            Gracias al apoyo de nuestros patrocinadores y colaboradores,
            seguimos creciendo cada temporada
        </p>
    </section>

    <section class="patrocinadores_principales">

        <div class="patrocinadores_grid">

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo1"></div>
                <div class="patrocinador_info">
                    <h3>Nike</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo2"></div>
                <div class="patrocinador_info">
                    <h3>Adidas</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo3"></div>
                <div class="patrocinador_info">
                    <h3>Puma</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

            <a href="#" class="patrocinador_card">
                <div class="patrocinador_logo4"></div>
                <div class="patrocinador_info">
                    <h3>Caixabank</h3>
                    <p>Patrocinador oficial</p>
                </div>
            </a>

        </div>
    </section>

    <section class="colaboradores">

        <h2>Colaboran con nosotros</h2>

        <div class="colaboradores_grid">

            <article class="colaborador_card">
                <div class="colaborador_logo1"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo2"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo3"></div>
            </article>

            <article class="colaborador_card">
                <div class="colaborador_logo4"></div>
            </article>

        </div>
    </section>

    <section class="hazte_patrocinador">
        <h2>¿Quieres apoyar al club?</h2>
        <p>Únete como patrocinador o colaborador y forma parte de nuestra familia.</p>
        <a href="#" class="btn-patrocinador">Hazte patrocinador</a>
    </section>

</main>

@endsection