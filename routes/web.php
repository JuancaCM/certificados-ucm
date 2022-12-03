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
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\InscribedController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Analista;
use App\Http\Middleware\Docente;
use App\Http\Middleware\SuperAdmin;
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

Route::middleware(SuperAdmin::class)->group(function () {

    Route::get('/perfil', [UserController::class, 'profile']);

    Route::get('/registroAdmin', function () {return view('superAdmin/registroAdmin');});

    Route::post('/registroAdmin', [UserController::class, 'guardarAdmin']);

    Route::get('/', function () {return view('nav.index');});
});

Route::middleware(Admin::class)->group(function () {

    Route::get('/perfil', [UserController::class, 'profile']);

    Route::get('/', function () {return view('nav.index');});

    Route::get('pdf', [PdfController::class, 'index']);

    Route::get('/nueva-certificacion', [CourseController::class, 'form']);
    Route::post('/nueva-certificacion', [CourseController::class, 'saveForm']);

    Route::get('/certificaciones', [CourseController::class, 'viewList']);

    Route::get('/editar-certificacion', [CourseController::class, 'editForm']);
    Route::post('/editar-certificacion', [CourseController::class, 'saveEdit']);

    Route::get('/relatoriaCertificaciones', [CourseTeacherController::class, 'formulario']);
    Route::post('/relatoriaCertificaciones', [CourseTeacherController::class, 'guardar']);

    Route::get('/registroDocente', [TeacherController::class, 'formulario']);
    Route::post('/registroDocente', [TeacherController::class, 'guardar']);

    Route::get('/registroDimensiones', function () {return view('admin/certifications.registroDimensiones');});
    Route::post('/registroDimensiones', [DimensionController::class, 'guardar']);

    Route::post('/estadoCertificaciones', [StateController::class, 'guardar']);

    Route::get('/nueva-sede', function () {return view('admin/university.add-campus');});
    Route::post('/nueva-sede', [CampusController::class, 'save']);

    Route::post('/relatoriaCertificaciones', [CourseTeacherController::class, 'guardar']);

    Route::post('/tipoCertificaciones', [TypeController::class, 'guardar']);

    Route::post('/modalidadCertificaciones', [ModalityController::class, 'guardar']);

    Route::post('/publico_objetivoCertificaciones', [TargetAudienceController::class, 'guardar']);

    Route::get('/nueva-carrera', [CareerController::class, 'form']);
    Route::post('/nueva-carrera', [CareerController::class, 'saveForm']);

    Route::post('/facultadUniversity', [FacultyController::class, 'guardar']);

    Route::get('/nuevo-contrato', function () {return view('admin/users.add-contract-type');});
    Route::post('/nuevo-contrato', [ContractController::class, 'save']);

    Route::get('/listaDocentes', [TeacherController::class, 'formulario2']);

    Route::get('/listaDimensiones', [DimensionController::class, 'formulario']);

    Route::post('/registroAnalista', [UserController::class, 'guardarAnalista']);

    Route::get('/registroAnalista', function () {return view('admin/users.registroAnalista');});

    Route::get('/estadoCertificaciones', function () {return view('admin/certifications.estadoCertificaciones');});

    Route::get('/relatoriaCertificaciones', function () {return view('admin/certifications.relatoriaCertificaciones');});

    Route::get('/publico_objetivoCertificaciones', function () {return view('admin/certifications.publico_objetivoCertificaciones');});

    Route::get('/tipoCertificaciones', function () {return view('admin/certifications.tipoCertificaciones');});

    Route::get('/modalidadCertificaciones', function () {return view('admin/certifications.modalidadCertificaciones');});

    Route::get('/facultadUniversity', function () {return view('admin/university.facultadUniversity');});

    Route::get('/inscribir', [InscribedController::class, 'formularioInscribir']);
    Route::post('/inscribir', [InscribedController::class, 'inscribir']);

    Route::get('/editarDocente', [TeacherController::class, 'formularioEditar']);
    Route::post('/editarDocente', [TeacherController::class, 'guardarEditar']);

    Route::get('/certDocentes', [InscribedController::class, 'formulario']);

    Route::get('/modificar-certificado', [CertificateController::class, 'form']);
    Route::post('/modificar-certificado', [CertificateController::class, 'saveForm']);

    Route::get('/imagenes', function () {return view('admin/certifications.imagenesCertificado');});

    Route::get('/editarDimension', [DimensionController::class, 'formularioEditar']);
    Route::post('/editarDimension', [DimensionController::class, 'guardarEditar']);

    Route::get('/inscritos', [InscribedController::class, 'inscritos']);
    Route::post('/inscritos', [InscribedController::class, 'guardarEditar']);

    Route::get('/relatores', [CourseTeacherController::class, 'formulario']);

    Route::get('/editarRelator', [CourseTeacherController::class, 'formularioEditar']);
    Route::post('/editarRelator', [CourseTeacherController::class, 'guardarEditar']);
});

Route::middleware(Docente::class)->group(function () {

    Route::get('/contacto', function () {return view('nav.contacto');});

    Route::get('/perfil', [UserController::class, 'profile']);

    Route::get('/', function () {return view('nav.index');});

    Route::get('pdf', [PdfController::class, 'index']);

    Route::get('/terminados', [TeacherController::class, 'verTerminados']);

    Route::get('/enCurso', [TeacherController::class, 'verEnCurso']);

});

Route::middleware(Analista::class)->group(function () {

    Route::get('/perfil', [UserController::class, 'profile']);

    Route::get('/', function () {return view('nav.index');});

});

Route::get('/logout', [SessionController::class, 'logout']);

Route::post('/login', [SessionController::class, 'login']);

Route::get('/login', function () {return view('login');});
