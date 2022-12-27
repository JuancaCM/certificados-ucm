<?php

namespace App\Http\Controllers;

use App\Models\TargetAudience;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TargetAudienceController extends Controller
{
    public function saveTargetAudience(Request $req)
    {
        DB::beginTransaction();
        try {
            $targetaudience = $req->input('name');
            $observacion = $req->input('observation');

            $publico_objetivo = new TargetAudience();
            $publico_objetivo ->name = $targetaudience;
            $publico_objetivo ->observation= $observacion;

            $publico_objetivo->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
