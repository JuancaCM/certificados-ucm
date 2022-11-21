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

        return view('admin/users.registroDocente', compact('careers', 'campuses', 'contracts', 'roles'));
    }

    public function formulario2()
    {
        $teachers = Teacher::with('career')
            ->with('career.faculty')
            ->with('contract')
            ->with('user')
            ->with('campus')->get();

        return view('admin/users.listaDocentes', compact('teachers'));
    }

    public function formularioEditar(Request $req)
    {
        $teacher = Teacher::find($req->input('id'));
        $careers = Career::all();
        $campuses = Campus::all();
        $contracts = Contract::all();
        $roles = Role::all();

        return view('admin/users/editar.editTeacher', compact('teacher', 'careers', 'campuses', 'contracts', 'roles'));
    }

    public function guardarEditar(Request $req)
    {
        DB::beginTransaction();
        try {
            $userId = $req->input('userId');
            $rut = $req->input('rut');
            $name = $req->input('name');
            $mail = $req->input('mail');
            $career = $req->input('career');
            $campus = $req->input('campus');
            $contract = $req->input('contract');
            $phone = $req->input('phone');

            $user = User::find($userId);
            $user->rut = $rut;
            $user->name = $name;
            $user->mail = $mail;
            $user->phone = $phone;

            $user->save();

            $teacherId = $req->input('teacherId');

            $teacher = Teacher::find($teacherId);
            $teacher->career_id = $career;
            $teacher->campus_id = $campus;
            $teacher->contract_id = $contract;

            $teacher->save();

            DB::commit();

            return redirect()->to('/listaDocentes')->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to('/listaDocentes')->with('insert', false);
        }
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
