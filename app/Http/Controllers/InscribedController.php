<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Inscribed;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class InscribedController extends Controller
{
    public function certifiedViewList()
    {
        $inscribeds = Inscribed::all();

        return view('admin/users/table-views/view-certified', compact('inscribeds'));
    }

    public function inscribedForm()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $meses = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
        ];

        return view('admin/users/add/add-inscribed', compact('teachers', 'courses', 'meses'));
    }

    public function saveInscribedForm(Request $req)
    {
        DB::beginTransaction();
        try {
            $teacherId = $req->input('name_teacher');
            $courseId = $req->input('name_course');

            $inscribedsCourses = Inscribed::select('course_id')->where('teacher_id', '=', $teacherId)->get()->pluck('course_id')->toArray();

            if (in_array($courseId, $inscribedsCourses)) {
                return back()->with('insert', false);
            }

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

    public function inscritos(Request $req)
    {
        $course = Course::find($req->input('id'));
        $inscribeds = Inscribed::all()->where('course_id', '=', $req->input('id'));
        $meses = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
        ];

        return view('admin/certifications.inscritos', compact('course', 'inscribeds'));
    }

    public function guardarEditar(Request $req)
    {
        DB::beginTransaction();
        try {
            $id = $req->input('id');
            $attendance = $req->input('attendance');
            $authorization = $req->input('authorization');

            $inscribed = Inscribed::find($id);
            $inscribed->attendance = $attendance;
            $inscribed->authorization = $authorization;

            $inscribed->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
