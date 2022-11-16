<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Campus;
use App\Models\Course;
use App\Models\CourseName;
use App\Models\CourseTeacher;
use App\Models\Modality;
use App\Models\State;
use App\Models\TargetAudience;
use App\Models\Type;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function formulario()
    {
        $dimensions = Dimension::all();
        $campuses = Campus::all();
        $states = State::all();
        $types = Type::all();
        $modalities = Modality::all();
        $course_teachers = CourseTeacher::all();
        $target_audiences = TargetAudience::all();
        $course_names = CourseName::all();

        return view('admin/certis.registroCertificaciones', compact('dimensions', 'campuses', 'states', 'types', 'modalities', 'course_teachers', 'target_audiences', 'course_names'));
    }

    public function formulario2()
    {
        $courses = Course::with('state')
            ->with('campus')
            ->with('course_name')
            ->with('course_name.dimension')
            ->with('course_teacher')
            ->with('target_audience')
            ->with('type')
            ->with('modality')->get();

        return view('admin/certis.listaCertificaciones', compact('courses'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        // try {
            $course_name = $req->input('name');
            $target_audience = $req->input('target_audience');
            $campus = $req->input('campus');
            $state = $req->input('state');
            $type = $req->input('type');
            $modality = $req->input('modality');
            $sessions = $req->input('sessions');
            $duration = $req->input('duration');
            $synchronous_hours = $req->input('synchronous_hours');
            $autonomous_hours = $req->input('autonomous_hours');
            $inscription_link = $req->input('inscription_link');
            $program_link = $req->input('program_link');
            $course_teacher = $req->input('course_teacher');
            $fecha_inicio = $req->input('fecha_inicio');
            $fecha_termino = $req->input('fecha_termino');
            $schedule = $req->input('schedule');
            $fecha_inicio = Carbon::createFromFormat('d/m/Y', $fecha_inicio)->toDateString();
            $fecha_termino = Carbon::createFromFormat('d/m/Y', $fecha_termino)->toDateString();

            $course = new Course();
            $course->inscription = $inscription_link;
            $course->program = $program_link;
            $course->type_id = $type;
            $course->state_id = $state;
            $course->campus_id = $campus;
            $course->modality_id = $modality;
            $course->course_name_id = $course_name;
            $course->course_teacher_id = $course_teacher;
            $course->target_audience_id = $target_audience;
            $course->duration = $duration;
            $course->sessions = $sessions;
            $course->synchronous_hours = $synchronous_hours;
            $course->autonomous_hours = $autonomous_hours;
            $course->schedule = $schedule;
            $course->start = $fecha_inicio;
            $course->end = $fecha_termino;

            $course->save();

            DB::commit();

            return back()->with('insert', true);
        // } catch (\Throwable $th) {
        //     dd($th->getTraceAsString());
        //     DB::rollBack();
        //     return back()->with('insert', false);
        // }
   }
}
