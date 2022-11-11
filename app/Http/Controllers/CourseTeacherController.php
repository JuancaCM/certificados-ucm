<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseTeacherController extends Controller
{
    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $phone = $req->input('phone');

            $relatoria = new CourseTeacher();
            $relatoria->name = $name;
            $relatoria->rut = $rut;
            $relatoria->mail = $mail;
            $relatoria->phone = $phone;

            $relatoria->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
