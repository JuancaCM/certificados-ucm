<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function login(Request $req)
    {
        $rut = $req->input('rut');
        $pass = $req->input('pass');

        $user = User::where('rut', $rut)->with('role')
            ->get();

        if ($user->count() === 0) {
            return back();
        }

        if (Hash::check($pass, $user->first()->pass)) {
            session(['id' => $user->first()->id]);
            session(['role_name' => $user->first()->role->name]);
            session(['name' => $user->first()->name]);
            return redirect()->to('/')->with('login', true);
        }

        return redirect()->to('/login')->with('login', false);

    }

    public function logout(Request $req)
    {
        session()->flush();
        return redirect()->to('/login')->with('message', 'Usuario no autorizado')->with('color', 'bg-danger');
    }
}
