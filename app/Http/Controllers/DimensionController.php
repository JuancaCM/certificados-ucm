<?php

namespace App\Http\Controllers;

use App\Models\Dimension;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DimensionController extends Controller
{
    public function formulario()
    {
        $dimensions = Dimension::all();

        return view('admin/certis.listaDimensiones', compact('dimensions'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $dimension = $req->input('dimension');
            $description = $req->input('description');

            $dimen = new Dimension();
            $dimen->name = $dimension;
            $dimen->description = $description;

            $dimen->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }

    public function formularioEditar(Request $req)
    {
        $dimension = Dimension::find($req->input('id'));

        return view('admin/certis/editar.editDimension', compact('dimension'));
    }

    public function guardarEditar(Request $req)
    {
        DB::beginTransaction();
        try {

            $dimension = $req->input('dimension');
            $description = $req->input('description');

            $dimen = Dimension::find($req->input('id'));

            $dimen->name = $dimension;
            $dimen->description = $description;

            $dimen->save();

            DB::commit();

            return redirect()->to('/listaDimensiones')->with('insert', true);
        } catch (\Throwable $th) {
            // \Log::debug($th->getMessage());
            // dd($th->getTraceAsString());
            DB::rollBack();
            return redirect()->to('/listaDimensiones')->with('insert', false);
        }
    }
}
