<?php

namespace App\Http\Controllers;

use App\Models\State;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{
    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $state = $req->input('name');
            $observacion = $req->input('observation');

            $estado = new State();
            $estado->name = $state;
            $estado->observation= $observacion;

            $estado->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
