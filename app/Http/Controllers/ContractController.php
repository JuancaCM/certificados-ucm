<?php

namespace App\Http\Controllers;

use App\Models\Contract;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function saveContract(Request $req)
    {
        DB::beginTransaction();
        try {
            $name = $req->input('name');
            $observation = $req->input('observation');

            $contract = new Contract();
            $contract->name = $name;
            $contract->observation= $observation;

            $contract->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
