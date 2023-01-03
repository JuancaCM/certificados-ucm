<?php

namespace App\Http\Controllers;

use App\Models\Dimension;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DimensionController extends Controller
{
    public function dimensionsViewList()
    {
        $dimensions = Dimension::all();

        return view('admin/certifications/table-views/dimensions-view', compact('dimensions'));
    }

    public function saveNewDimension(Request $req)
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

            return redirect()->to('/nuevo-nombre-certificacion')->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to('/nuevo-nombre-certificacion')->with('insert', false);
        }
    }

    public function dimensionEditForm(Request $req)
    {
        $dimension = Dimension::find($req->input('id'));

        return view('admin/certifications/edit/edit-dimension', compact('dimension'));
    }

    public function saveDimensionEditForm(Request $req)
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
            DB::rollBack();
            return redirect()->to('/listaDimensiones')->with('insert', false);
        }
    }
}
