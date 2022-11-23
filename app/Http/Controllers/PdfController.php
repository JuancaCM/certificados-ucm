<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Course;
use App\Models\CourseName;
use App\Models\Inscribed;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
use TCPDF_FONTS;

class PdfController extends Controller
{
    public function index(Request $req)
    {

        $font = TCPDF_FONTS::addTTFfont('fonts/Century Gothic.otf', 'TrueTypeUnicode', '', 96);

        PDF::SetTitle('Certificado');
        PDF::AddPage('P', 'LETTER');

        PDF::SetFont($font, 'BU', 12, '', true);

        $title = <<<EOD
        CONSTANCIA DE PARTICIPACIÓN
        EOD;

        PDF::MultiCell(0, 0, $title, 0, 'C', 0, 1, '', 40.8);

        PDF::setImageScale(2.09);
        PDF::writeHTMLCell(0, 0, 27.8, 41.8, '<img src="img/firma.png"/>');

        PDF::SetFont($font, '', 11.3, '', true);
        PDF::SetCellHeightRatio(1.8);

        $id = $req->input('id');
        $idI = Inscribed::find($id);

        if ($idI->authorization != 1) {
            return redirect()->to('/');
        }

        $idT = $idI->teacher_id;
        $idC = $idI->course_id;

        $teacher = Teacher::find($idT);
        $certification = Course::find($idC);
        $certificate = Certificate::find(1);
        $month = date('m', strtotime($certification->start));
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Noviembre', 'Diciembre'];
        $mes = $meses[ltrim($month, 0) - 1];

        $nameD = $certificate->directorName;
        $cargo = $certificate->position;
        $nameT = User::find($teacher->user_id)->name;
        $varRut = $certificate->varRut;
        $rut = User::find($teacher->user_id)->rut;
        $participacion = $certificate->participation;
        $organizacion = $certificate->organization;
        // “”
        $taller = CourseName::find($certification->course_name_id)->name;
        $fecha = date('d', strtotime($certification->start)) . " de " . $mes . " del " . date('Y', strtotime($certification->start));
        $varDuracion = $certificate->varDuration;
        $duracion = $certification->duration;
        $varContenido = $certificate->varContent;
        $contenidos = CourseName::find($certification->course_name_id)->contents;
        $ciudad = "Talca";

        if (User::find($teacher->user_id)->sex == 'M') {
            $constancia = $certificate->constancyM;
            $final = $certificate->endM;
        } elseif (User::find($teacher->user_id)->sex == 'F') {
            $constancia = $certificate->constancyF;
            $final = $certificate->endF;
        } else {
            $constancia = $certificate->constancy;
            $final = $certificate->end;
        }

        $text = <<<EOD
            $nameD, $cargo, $constancia $nameT, $varRut $rut, $participacion "$taller" $organizacion $fecha, $varDuracion $duracion horas.
            $varContenido $contenidos.
            $final
        EOD;

        PDF::setImageScale(13.5);
        PDF::writeHTMLCell(0, 0, 32, 8.4, '<img src="img/LogoUCM.png"/>');
        PDF::setImageScale(6.1);
        PDF::writeHTMLCell(0, 0, 135, 5, '<img src="img/LogoCDID.png"/>', 0, 0, 0, true);

        PDF::setCellPaddings(20, '', 20, '');
        // PDF::writeHTMLCell(0, 0, '', 85, $text."\n");
        PDF::MultiCell(0, 0, $text . "\n", 0, 'J', 0, 1, '', 83, true, 0, false, false);

        PDF::MultiCell(0, 0, $ciudad . ", " . $fecha, 0, 'R', 0, 1, '', 218, true, 0, false, false);

        // PDF::write(0, $output, '', 0, 'J', true, 0, false, false, 0);
        PDF::Output('Certificado.pdf');
    }
}
