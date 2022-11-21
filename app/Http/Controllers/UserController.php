<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $phone = $req->input('phone');

            $admin = new User();
            $admin->name = $name;
            $admin->rut = $rut;
            $admin->pass = bcrypt($rut);
            $admin->mail = $mail;
            $admin->phone = $phone;
            $admin->role_id = 1;

            $admin->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }

    public function save(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $phone = $req->input('phone');

            $analista = new User();
            $analista->name = $name;
            $analista->rut = $rut;
            $analista->pass = bcrypt($rut);
            $analista->mail = $mail;
            $analista->phone = $phone;
            $analista->role_id = 3;

            $analista->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
