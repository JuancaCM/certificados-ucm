<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function formulario()
    {
        $certificate = Certificate::find(1);

        return view('admin/certis.contenidoCertificado', compact('certificate'));
    }

    public function guardarCertificado(Request $req)
    {
        DB::beginTransaction();
        try {
            $title = $req->input('titulo');
            $director = $req->input('directorname');
            $position = $req->input('position');
            $constancy = $req->input('constancy');
            $constancyM = $req->input('constancyM');
            $constancyF = $req->input('constancyF');
            $rut = $req->input('rut');
            $participation = $req->input('participation');
            $organization = $req->input('organization');
            $duration = $req->input('duration');
            $content = $req->input('content');
            $final = $req->input('final');
            $finalM = $req->input('finalM');
            $finalF = $req->input('finalF');

            $certificate = Certificate::find(1);
            $certificate->title = $title;
            $certificate->directorName = $director;
            $certificate->position = $position;
            $certificate->constancy = $constancy;
            $certificate->constancyM = $constancyM;
            $certificate->constancyF = $constancyF;
            $certificate->varRut = $rut;
            $certificate->participation = $participation;
            $certificate->organization = $organization;
            $certificate->varDuration = $duration;
            $certificate->varContent = $content;
            $certificate->end = $final;
            $certificate->endM = $finalM;
            $certificate->endF = $finalF;

            $certificate->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            // \Log::debug($th->getMessage());
            // dd($th->getTraceAsString());
            DB::rollBack();
            return back()->with('insert', false);
        }
   }

}
