<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function saveNewType(Request $req)
    {
        DB::beginTransaction();
        try {
            $type = $req->input('name');
            $observacion = $req->input('observation');

            $tipo = new Type();
            $tipo->name = $type;
            $tipo->observation= $observacion;

            $tipo->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
