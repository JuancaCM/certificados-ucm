<?php

use App\Http\Controllers\TeacherController;
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

Route::get('/registro', [TeacherController::class, 'formulario']);
Route::post('/registro', [TeacherController::class, 'guardar']);

Route::get('/registroCertificaciones', function () {
    return view('certis.registroCertificaciones');
});

Route::get('/registroDimensiones', function () {
    return view('certis.registroDimensiones');
});

Route::get('/perfil', function () {
    return view('users.perfil');
});

Route::get('/contacto', function () {
    return view('nav.contacto');
});
