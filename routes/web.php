<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DimensionController;
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

Route::get('/registroCertificaciones', [CourseController::class, 'formulario']);
Route::post('/registroCertificaciones', [CourseController::class, 'guardar']);

Route::get('/registroDocente', function () {
    return view('users.registroDocente');
});

Route::get('/registroDimensiones', function () {
    return view('certis.registroDimensiones');
});
Route::post('/registroDimensiones', [DimensionController::class, 'guardar']);

Route::get('/listaUsuarios', function () {
    return view('users.listaUsuarios');
});

Route::get('/listaDimensiones', function () {
    return view('certis.listaDimensiones');
});

Route::get('/listaCertificaciones', function () {
    return view('certis.listaCertificaciones');
});

Route::get('/analistaUsers', function () {
    return view('users.analistaUsers');
});

Route::get('/administradorUsers', function () {
    return view('users.administradorUsers');
});

Route::get('/estadoCertificaciones', function () {
    return view('certis.estadoCertificaciones');
});



Route::get('/sedeCertificaciones', function () {
    return view('certis.sedeCertificaciones');
});

Route::get('/relatoriaCertificaciones', function () {
    return view('certis.relatoriaCertificaciones');
});

Route::get('/publico_objetivoCertificaciones', function () {
    return view('certis.publico_objetivoCertificaciones');
});

Route::get('/tipoCertificaciones', function () {
    return view('certis.tipoCertificaciones');
});

Route::get('/modalidadCertificaciones', function () {
    return view('certis.modalidadCertificaciones');
});

Route::get('/inscritosCertificaciones', function () {
    return view('certis.inscritosCertificaciones');
});

Route::get('/perfil', function () {
    return view('users.perfil');
});

Route::get('/contacto', function () {
    return view('nav.contacto');
});

