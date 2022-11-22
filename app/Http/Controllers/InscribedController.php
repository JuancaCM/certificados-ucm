<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Inscribed;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscribedController extends Controller
{
    public function formulario()
    {
        $inscribeds = Inscribed::all();

        return view('admin.courses', compact('inscribeds'));
    }

    public function formularioInscribir()
    {
        $teachers = Teacher::all();
        $courses = Course::all();

        return view('admin/certis.inscritosCertificaciones', compact('teachers', 'courses'));
    }

    public function inscribir(Request $req)
    {
        DB::beginTransaction();
        try {
            $teacherId = $req->input('name_teacher');
            $courseId = $req->input('name_course');
            $observation = $req->input('description');

            $inscription = new Inscribed();
            $inscription->teacher_id = $teacherId;
            $inscription->course_id = $courseId;
            $inscription->attendance = '';
            $inscription->authorization = 0;

            $inscription->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
