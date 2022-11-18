<?php

namespace App\Http\Controllers;

use App\Models\Inscribed;
use Illuminate\Http\Request;

class InscribedController extends Controller
{
    public function formulario()
    {
        $inscribeds = Inscribed::all();

        return view('teacher.inscribed', compact('inscribeds'));
    }
}
