<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/noticias/{id}', function ($id) {
    return view('detalles_noticia');
})->name('noticia.detalle');

Route::get('/equipos', function () {
    return view('equipos');
})->name('equipos');

Route::get('/estadisticas', function () {
    return view('estadisticas');
})->name('estadisticas');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/patrocinadores', function () {
    return view('patrocinadores_colaboradores');
})->name('patrocinadores');

Route::get('/partidos', function () {
    return view('partidos');
})->name('partidos');

Route::get('/detalles_partido', function () {
    return view('detalles_partido');
})->name('detalles_partido');

Route::get('/detalle_producto', function () {
    return view('detalle_producto');
})->name('detalle_producto');

Route::get('/perfil', function () {
    return view('perfil_usuario');
})->name('perfil.usuario');

Route::get('/plantilla', function () {
    return view('plantilla');
})->name('plantilla');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/admin/equipos', function () {
    return view('admin.equipos');
})->name('admin.equipos');

Route::get('/admin/partidos', function () {
    return view('admin.partidos');
})->name('admin.partidos');

Route::get('/admin/estadisticas', function () {
    return view('admin.estadisticas');
})->name('admin.estadisticas');