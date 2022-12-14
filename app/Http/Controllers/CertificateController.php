<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function editCertificateForm()
    {
        $certificate = Certificate::find(1);

        return view('admin/certificate/certificate-content', compact('certificate'));
    }

    public function saveEditCertificateForm(Request $req)
    {
        DB::beginTransaction();
        try {
            $title = $req->input('titulo');
            $director = $req->input('name');
            $position = $req->input('position');
            $constancy = $req->input('constancy');
            $constancyM = $req->input('constancyM');
            $constancyF = $req->input('constancyF');
            $rut = $req->input('rut');
            $participation = $req->input('participation');
            $organization = $req->input('organization');
            $duration = $req->input('duration');
            $content = $req->input('content');
            $end = $req->input('final');
            $endM = $req->input('finalM');
            $endF = $req->input('finalF');

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
            $certificate->end = $end;
            $certificate->endM = $endM;
            $certificate->endF = $endF;

            $certificate->save();

            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            // \Log::debug($th->getMessage());
            DB::rollBack();
            return back()->with('insert', false);
        }
   }

}
