<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/comentarios', function () {
    return view('admin.admin_comentarios', [
        'zonas' => [],
        'comentarios' => [],
        'zona_seleccionada' => null,
    ]);
});

Route::get('/admin/panel', function () {
    return view('admin.panel_admin');
});

Route::get('/admin/consejos', function () {
    return view('admin.admin_consejos');
});

Route::get('/admin/editarespecie', function () {
    return view('admin.editar_especie');
});

Route::get('/admin/editarol', function () {
    return view('admin.editar_rol');
});

Route::get('/admin/especies', function () {
    return view('admin.admin_especies');
});
