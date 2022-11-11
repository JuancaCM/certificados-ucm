<?php

namespace App\Http\Controllers;

use App\Models\Campus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampusController extends Controller
{
    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $campus = $req->input('name');
            $observacion = $req->input('observation');

            $sede = new Campus();
            $sede->name = $campus;
            $sede->observation= $observacion;

            $sede->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
