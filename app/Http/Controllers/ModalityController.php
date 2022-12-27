<?php

namespace App\Http\Controllers;

use App\Models\Modality;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModalityController extends Controller
{
    public function saveModality(Request $req)
    {
        DB::beginTransaction();
        try {
            $modality = $req->input('name');
            $observacion = $req->input('observation');

            $modalidad = new Modality();
            $modalidad->name = $modality;
            $modalidad->observation= $observacion;

            $modalidad->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
