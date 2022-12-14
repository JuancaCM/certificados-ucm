<?php

namespace App\Http\Controllers;

use App\Models\Campus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampusController extends Controller
{
    public function saveCampus(Request $req)
    {
        DB::beginTransaction();
        try {
            $campusName = $req->input('name');
            $observation = $req->input('observation');

            $campus = new Campus();
            $campus->name = $campusName;
            $campus->observation= $observation;

            $campus->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
