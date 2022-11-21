<?php

namespace App\Http\Controllers;

use App\Models\Inscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscribedController extends Controller
{
    public function formulario()
    {
        $inscribeds = Inscribed::all();

        return view('admin.courses', compact('inscribeds'));
    }

    public function guardarAdmin(Request $req)
    {
        DB::beginTransaction();
        try {
            $teacherId = $req->input('name_teacher');
            $courseId = $req->input('name_course');
            $observation = $req->input('description');

            $inscription = new Inscribed();
            $inscription->name = $teacherId;
            $inscription->rut = $courseId;
            $inscription->rut = $observation;

            $inscription->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
