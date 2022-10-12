<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('nav.index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('users.registroUsers');
});

Route::get('/capacitaciones', function () {
    return view('capacitaciones');
});

Route::get('/perfil', function () {
    return view('users.perfil');
});

Route::get('/contacto', function () {
    return view('nav.contacto');
});
