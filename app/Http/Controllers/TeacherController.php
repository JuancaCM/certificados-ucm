<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Career;
use App\Models\Contract;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function formulario()
    {
        $careers = Career::all();
        $campuses = Campus::all();
        $contracts = Contract::all();
        $roles = Role::all();

        return view('users.registroDocente', compact('careers', 'campuses', 'contracts', 'roles'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $career = $req->input('career');
            $campus = $req->input('campus');
            $contract = $req->input('contract');
            $phone = $req->input('phone');

            $user = new User();
            $user->rut = $rut;
            $user->pass = bcrypt('1234');
            $user->name = $name;
            $user->mail = $mail;
            $user->phone = $phone;
            $user->role_id = 2;

            $user->save();
            $userId = $user->id;

            $teacher = new Teacher();
            $teacher->career_id = $career;
            $teacher->user_id = $userId;
            $teacher->campus_id = $campus;
            $teacher->contract_id = $contract;

            $teacher->save();

            DB::commit();

            return back()->with('insert', true);

        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('insert', false);
        }
    }
}
