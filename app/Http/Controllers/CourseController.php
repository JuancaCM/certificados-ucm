<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Dimension;
use App\Models\Campus;
use App\Models\State;
use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function formulario()
    {
        $dimensions = Dimension::all();
        $campuses = Campus::all();
        $states = State::all();
        $courses = Course::all();
        $types = Type::all();

        return view('certis.registroCertificaciones', compact('dimensions', 'campuses', 'states', 'courses', 'types'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $name = $req->input('name');
            $dimension = $req->input('dimension');
            $course = $req->input('course');
            $campus = $req->input('campus');
            $type = $req->input('type');
            $state = $req->input('state');

            $course = new Course();
            $course->dimension_id = $dimension;
            $course->type_id = $type;
            $course->name = $name;
            $course->state_id = $state;
            $course->campus_id = $campus;

            $course->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
   }
}
