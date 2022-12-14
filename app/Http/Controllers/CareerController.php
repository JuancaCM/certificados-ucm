<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{

    public function careerForm()
    {
        $faculties = Faculty::all();

        return view('admin/university/add/add-career', compact('faculties'));
    }

    public function saveCareerForm(Request $req)
    {
        DB::beginTransaction();
        try {
            $careerName = $req->input('name');
            $idFaculty= $req->input('faculty');
            $observation = $req->input('observation');

            $career = new Career();
            $career->name = $careerName;
            $career->faculty_id = $idFaculty;
            $career->observation= $observation;

            $career->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
