<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{

    public function formulario()
    {
        $faculties = Faculty::all();

        return view('university.carreraUniversity', compact('faculties'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $career = $req->input('name');
            $Id_facultad= $req->input('facultad');
            $observacion = $req->input('observation');

            $carrera = new Career();
            $carrera->name = $career;
            $carrera->faculty_id = $Id_facultad;
            $carrera->observation= $observacion;

            $carrera->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
