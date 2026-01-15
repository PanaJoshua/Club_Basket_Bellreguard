<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/noticias', function () {
    return view('noticias.index');
})->name('noticias');

Route::get('/noticias/{id}', function ($id) {
    return view('noticias.show');
})->name('noticia_detalles');

Route::get('/equipos', function () {
    return view('equipos.index');
})->name('equipos');

Route::get('/equipos/{id}', function () {
    return view('equipos.show');
})->name('plantilla_jugadores');

Route::get('/partidos', function () {
    return view('partidos.index');
})->name('partidos');

Route::get('/partidos/estadisticas', function () {
    return view('partidos.estadisticas');
})->name('estadisticas');

Route::get('/partidos/{id}', function () {
    return view('partidos.show');
})->name('detalles_partido');

Route::get('/calendario', function () {
    return view('calendario.index');
})->name('calendario');

Route::get('/tienda', function () {
    return view('tienda.index');
})->name('tienda');

Route::get('/tienda/{id}', function () {
    return view('tienda.show');
})->name('detalle_producto');

Route::get('/patrocinadores', function () {
    return view('patrocinadores.index');
})->name('patrocinadores');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/registro', function () {
    return view('auth.registro');
})->name('registro');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/equipos', function () {
    return view('admin.equipos.index');
})->name('admin.equipos');

Route::get('/admin/partidos', function () {
    return view('admin.partidos.index');
})->name('admin.partidos');

Route::get('/admin/estadisticas', function () {
    return view('admin.estadisticas.index');
})->name('admin.estadisticas');

Route::get('/perfil', function () {
    return view('admin.perfil_usuario');
})->name('perfil.usuario');