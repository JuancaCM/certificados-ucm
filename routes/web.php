<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DimensionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\TargetAudienceController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ModalityController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\PdfController;
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

Route::get('pdf', [PdfController::class, 'index']);

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

Route::get('/relatoriaCertificaciones', [CourseTeacherController::class, 'formulario']);
Route::post('/relatoriaCertificaciones', [CourseTeacherController::class, 'guardar']);

Route::get('/registroDocente', [TeacherController::class, 'formulario']);
Route::post('/registroDocente', [TeacherController::class, 'guardar']);


Route::get('/registroDimensiones', function () {
    return view('admin/certis.registroDimensiones');
});
Route::post('/registroDimensiones', [DimensionController::class, 'guardar']);

Route::post('/estadoCertificaciones', [StateController::class, 'guardar']);

Route::post('/sedeCertificaciones', [CampusController::class, 'guardar']);

Route::post('/relatoriaCertificaciones', [CourseTeacherController::class, 'guardar']);

Route::post('/tipoCertificaciones', [TypeController::class, 'guardar']);

Route::post('/modalidadCertificaciones', [ModalityController::class, 'guardar']);

Route::post('/publico_objetivoCertificaciones', [TargetAudienceController::class, 'guardar']);

Route::get('/carreraUniversity', [CareerController::class, 'formulario']);
Route::post('/carreraUniversity', [CareerController::class, 'guardar']);

Route::post('/facultadUniversity', [FacultyController::class, 'guardar']);

Route::post('/contratoUniversity', [ContractController::class, 'guardar']);

Route::get('/listaUsuarios', [TeacherController::class, 'formulario2']);

Route::get('/listaDimensiones', [DimensionController::class, 'formulario']);

Route::get('/listaCertificaciones', [CourseController::class, 'formulario2']);

Route::get('/analistaUsers', function () {
    return view('admin/users.analistaUsers');
});

Route::get('/administradorUsers', function () {
    return view('admin/users.administradorUsers');
});

Route::get('/estadoCertificaciones', function () {
    return view('admin/certis.estadoCertificaciones');
});

Route::get('/sedeCertificaciones', function () {
    return view('admin/certis.sedeCertificaciones');
});

Route::get('/relatoriaCertificaciones', function () {
    return view('admin/certis.relatoriaCertificaciones');
});

Route::get('/publico_objetivoCertificaciones', function () {
    return view('admin/certis.publico_objetivoCertificaciones');
});

Route::get('/tipoCertificaciones', function () {
    return view('admin/certis.tipoCertificaciones');
});

Route::get('/modalidadCertificaciones', function () {
    return view('admin/certis.modalidadCertificaciones');
});



Route::get('/facultadUniversity', function () {
    return view('admin/university.facultadUniversity');
});

Route::get('/contratoUniversity', function () {
    return view('admin/university.contratoUniversity');
});

Route::get('/inscritosCertificaciones', function () {
    return view('admin/certis.inscritosCertificaciones');
});

Route::get('/perfil', function () {
    return view('users.perfil');
});

Route::get('/contacto', function () {
    return view('nav.contacto');
});

Route::get('/cursos', function () {
    return view('docente.cursos');
});
