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

    Route::get('/registroAdmin', function () {return view('superAdmin/registroAdmin');});

    Route::post('/registroAdmin', [UserController::class, 'guardarAdmin']);

    Route::get('/', function () {return view('nav.index');});
});

Route::middleware(Admin::class)->group(function () {

    Route::get('/', function () {return view('nav.index');});

    Route::get('pdf', [PdfController::class, 'index']);

    Route::get('/nueva-certificacion', [CourseController::class, 'courseForm']);
    Route::post('/nueva-certificacion', [CourseController::class, 'saveCourseForm']);

    Route::get('/certificaciones', [CourseController::class, 'courseViewList']);

    Route::get('/editar-certificacion', [CourseController::class, 'courseEditForm']);
    Route::post('/editar-certificacion', [CourseController::class, 'saveCourseEditForm']);

    Route::get('/nuevo-relator', function () {return view('admin/certifications/add/add-course-teacher');});
    Route::post('/nuevo-relator', [CourseTeacherController::class, 'saveNewCourseTeacher']);

    Route::get('/relatores', [CourseTeacherController::class, 'courseTeacherViewList']);

    Route::get('/editar-relator', [CourseTeacherController::class, 'courseTeacherEditForm']);
    Route::post('/editar-relator', [CourseTeacherController::class, 'saveCourseTeacherEditForm']);

    Route::get('/nuevo-docente', [TeacherController::class, 'teacherForm']);
    Route::post('/nuevo-docente', [TeacherController::class, 'saveTeacherForm']);
    Route::get('/docentes', [TeacherController::class, 'teacherViewList']);
    Route::get('/editar-docente', [TeacherController::class, 'teacherEditForm']);
    Route::post('/editar-docente', [TeacherController::class, 'teacherSaveEditForm']);

    Route::get('/dimensiones', [DimensionController::class, 'dimensionsViewList']);

    Route::get('/nueva-dimension', function () {return view('admin/certifications/add/add-dimension');});
    Route::post('/nueva-dimension', [DimensionController::class, 'saveNewDimension']);

    Route::get('/editar-dimension', [DimensionController::class, 'dimensionEditForm']);
    Route::post('/editar-dimension', [DimensionController::class, 'saveDimensionEditForm']);

    Route::post('/nuevo-estado', [StateController::class, 'saveState']);

    Route::get('/nueva-sede', function () {return view('admin/university/add/add-campus');});
    Route::post('/nueva-sede', [CampusController::class, 'saveCampus']);

    Route::post('/tipoCertificaciones', [TypeController::class, 'guardar']);

    Route::get('/nueva-modalidad', function () {return view('admin/certifications/add/add-modality');});
    Route::post('/nueva-modalidad', [ModalityController::class, 'saveModality']);

    Route::get('/nuevo-publico-objetivo', function () {return view('admin/certifications/add/add-target-audience');});
    Route::post('/nuevo-publico-objetivo', [TargetAudienceController::class, 'saveTargetAudience']);

    Route::get('/nueva-carrera', [CareerController::class, 'careerForm']);
    Route::post('/nueva-carrera', [CareerController::class, 'saveCareerForm']);

    Route::get('/nueva-facultad', function () {return view('admin/university/add/add-faculty');});
    Route::post('/nueva-facultad', [FacultyController::class, 'saveNewFaculty']);

    Route::get('/nuevo-contrato', function () {return view('admin/users/add/add-contract-type');});
    Route::post('/nuevo-contrato', [ContractController::class, 'saveContract']);

    Route::post('/registroAnalista', [UserController::class, 'guardarAnalista']);

    Route::get('/registroAnalista', function () {return view('admin/users.registroAnalista');});

    Route::get('/estadoCertificaciones', function () {return view('admin/certifications.estadoCertificaciones');});

    Route::get('/tipoCertificaciones', function () {return view('admin/certifications.tipoCertificaciones');});

    Route::get('/docentes-certificados', [InscribedController::class, 'certifiedViewList']);

    Route::get('/inscribir', [InscribedController::class, 'inscribedForm']);
    Route::post('/inscribir', [InscribedController::class, 'saveInscribedForm']);

    Route::get('/inscritos', [InscribedController::class, 'inscribedViewList']);
    Route::post('/inscritos', [InscribedController::class, 'saveEditInscribedViewList']);

    Route::get('/modificar-certificado', [CertificateController::class, 'editCertificateForm']);
    Route::post('/modificar-certificado', [CertificateController::class, 'saveEditCertificateForm']);

    Route::get('/imagenes', function () {return view('admin/certifications.imagenesCertificado');});
});

Route::middleware(Docente::class)->group(function () {

    Route::get('/contacto', function () {return view('nav.contacto');});

    Route::get('/perfil', [UserController::class, 'profile']);

    Route::get('/', function () {return view('nav.index');});

    Route::get('pdf', [PdfController::class, 'index']);

    Route::get('/completados', [TeacherController::class, 'viewComplete']);

    Route::get('/en-curso', [TeacherController::class, 'inProgress']);

});

Route::middleware(Analista::class)->group(function () {

    Route::get('/', function () {return view('nav.index');});

});

Route::get('/logout', [SessionController::class, 'logout']);

Route::post('/login', [SessionController::class, 'login']);

Route::get('/login', function () {return view('login');});
