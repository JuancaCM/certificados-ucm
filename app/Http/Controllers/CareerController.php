<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{

    public function form()
    {
        $faculties = Faculty::all();

        return view('admin/university.add-career', compact('faculties'));
    }

    public function saveForm(Request $req)
    {
        DB::beginTransaction();
        try {
            $career = $req->input('name');
            $id_faculty= $req->input('faculty');
            $observation = $req->input('observation');

            $career = new Career();
            $career->name = $career;
            $career->faculty_id = $id_faculty;
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
