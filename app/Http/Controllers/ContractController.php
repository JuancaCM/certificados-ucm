<?php

namespace App\Http\Controllers;

use App\Models\Contract;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $contract = $req->input('name');
            $observacion = $req->input('observation');

            $contrato = new Contract();
            $contrato->name = $contract;
            $contrato->observation= $observacion;

            $contrato->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
