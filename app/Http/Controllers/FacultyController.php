<?php

namespace App\Http\Controllers;

use App\Models\Faculty;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function saveNewFaculty(Request $req)
    {
        DB::beginTransaction();
        try {
            $faculty = $req->input('name');
            $observation = $req->input('observation');

            $facultad = new Faculty();
            $facultad->name = $faculty;
            $facultad->observation= $observation;

            $facultad->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
