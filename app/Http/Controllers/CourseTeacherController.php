<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseTeacherController extends Controller
{
    public function saveNewCourseTeacher(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $phone = $req->input('phone');

            $courseTeacher = new CourseTeacher();
            $courseTeacher->name = $name;
            $courseTeacher->rut = $rut;
            $courseTeacher->mail = $mail;
            $courseTeacher->phone = $phone;

            $courseTeacher->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }

    public function viewList()
    {
        $course_teachers = CourseTeacher::all();

        return view('admin/certifications/table-views/course-teachers-view', compact('course_teachers'));
    }

    public function editForm(Request $req)
    {
        $course_teacher = CourseTeacher::find($req->input('id'));

        return view('admin/certifications/edit/edit-course-teacher', compact('course_teacher'));
    }

    public function saveEditForm(Request $req)
    {
        DB::beginTransaction();
        try {
            $id = $req->input('id');
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $phone = $req->input('phone');

            $course_teacher = CourseTeacher::find($id);
            $course_teacher->name = $name;
            $course_teacher->rut = $rut;
            $course_teacher->mail = $mail;
            $course_teacher->phone = $phone;

            $course_teacher->save();

            DB::commit();

            return redirect()->to('/relatores')->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to('/relatores')->with('insert', false);
        }

    }
}
