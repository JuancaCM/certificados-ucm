<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Career;
use App\Models\Contract;
use App\Models\Inscribed;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherForm()
    {
        $careers = Career::all();
        $campuses = Campus::all();
        $contracts = Contract::all();
        $roles = Role::all();

        return view('admin/users/add/add-teacher', compact('careers', 'campuses', 'contracts', 'roles'));
    }

    public function saveTeacherForm(Request $req)
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
            $user->pass = Hash::make($rut);
            $user->name = $name;
            $user->mail = $mail;
            $user->phone = $phone;
            $user->role_id = 3;

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

    public function teacherViewList()
    {
        $teachers = Teacher::with('career')
            ->with('career.faculty')
            ->with('contract')
            ->with('user')
            ->with('campus')->get();

        return view('admin/users/table-views/view-teachers', compact('teachers'));
    }

    public function teacherEditForm(Request $req)
    {
        $teacher = Teacher::find($req->input('id'));
        $careers = Career::all();
        $campuses = Campus::all();
        $contracts = Contract::all();
        $roles = Role::all();

        return view('admin/users/edit/edit-teacher', compact('teacher', 'careers', 'campuses', 'contracts', 'roles'));
    }

    public function teacherSaveEditForm(Request $req)
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

            return redirect()->to('/docentes')->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to('/docentes')->with('insert', false);
        }
    }

    public function viewComplete(Request $req)
    {
        $teacher = Teacher::where('user_id', session('id'))->get()->first();

        $inscribeds = Inscribed::where('teacher_id', $teacher->id)
            ->with('course')
            ->with('course.state')
            ->get();

        $meses = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
        ];

        return view('teacher/completed', compact('inscribeds', 'meses'));
    }

    public function inProgress()
    {
        $teacher = Teacher::where('user_id', session('id'))->get()->first();

        $inscribeds = Inscribed::where('teacher_id', $teacher->id)
            ->with('course')
            ->with('course.state')
            ->get();

        $meses = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
        ];

        return view('teacher/in-progress', compact('inscribeds', 'meses'));
    }
}
