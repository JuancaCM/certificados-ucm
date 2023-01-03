<?php

namespace App\Http\Controllers;

use App\Models\CourseName;
use App\Models\Dimension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseNameController extends Controller
{
    public function courseNameForm()
    {
        $dimensions = Dimension::all();

        return view('admin/certifications/add/add-course-name', compact('dimensions'));
    }

    public function saveNewCourseName(Request $req)
    {
        DB::beginTransaction();
        try {
            $name = $req->input('name');
            $dimension = $req->input('dimension');
            $contents = $req->input('contents');
            $observation = $req->input('observation');

            $courseName = new CourseName();
            $courseName->name = $name;
            $courseName->dimension_id = $dimension;
            $courseName->contents = $contents;
            $courseName->observation = $observation;

            $courseName->save();

            DB::commit();

            return redirect()->to('/nueva-certificacion')->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to('/nueva-certificacion')->with('insert', false);
        }
    }

    public function courseNameViewList()
    {
        $courseNames = CourseName::all();

        return view('admin/certifications/table-views/course-names-view', compact('courseNames'));
    }

    public function courseNameEditForm(Request $req)
    {
        $courseName = CourseName::find($req->input('id'));
        $dimensions = Dimension::all();

        return view('admin/certifications/edit/edit-course-name', compact('courseName', 'dimensions'));
    }

    // public function saveDimensionEditForm(Request $req)
    // {
    //     DB::beginTransaction();
    //     try {

    //         $dimension = $req->input('dimension');
    //         $description = $req->input('description');

    //         $dimen = Dimension::find($req->input('id'));

    //         $dimen->name = $dimension;
    //         $dimen->description = $description;

    //         $dimen->save();

    //         DB::commit();

    //         return redirect()->to('/listaDimensiones')->with('insert', true);
    //     } catch (\Throwable $th) {
    //         // \Log::debug($th->getMessage());
    //         DB::rollBack();
    //         return redirect()->to('/listaDimensiones')->with('insert', false);
    //     }
    // }
}
