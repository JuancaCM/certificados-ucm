<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Course;
use App\Models\CourseName;
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

        PDF::setImageScale ( 2.09 );
        PDF::writeHTMLCell(0, 0, 27.8, 41.8, '<img src="img/firma.png"/>');

        PDF::SetFont($font, '', 11.3, '', true);
        PDF::SetCellHeightRatio(1.8);

        $idT = $req->input('idT');
        $idC = $req->input('idC');
        $teacher = Teacher::find($idT);
        $certification = Course::find($idC);
        $certificate = Certificate::find(1);
        $month = date('m', strtotime($certification->start));
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Noviembre', 'Diciembre'];
        $mes = $meses[ltrim($month, 0) - 1];

        $nameD = $certificate->directorName;
        $cargo = $certificate->position;
        $constancia = $certificate->constancy;
        $constanciaM = $certificate->constancyM;
        $constanciaF = $certificate->constancyF;
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
        $final = $certificate->end;
        $ciudad = "Talca";

        if (User::find($teacher->user_id)->sex == 'M'){
            $sexo = $constanciaM;
        } elseif (User::find($teacher->user_id)->sex == 'F'){
            $sexo = $constanciaF;
        } else {
            $sexo = $constancia;
        }

        $text = <<<EOD
            $nameD, $cargo, $sexo $nameT, $varRut $rut, $participacion "$taller" $organizacion $fecha, $varDuracion $duracion horas.
            $varContenido $contenidos.
            $final
        EOD;

        PDF::setImageScale ( 13.5 );
        PDF::writeHTMLCell(0, 0, 32, 8.4, '<img src="img/Logo UCM.png"/>');
        PDF::setImageScale ( 6.1 );
        PDF::writeHTMLCell(0, 0, 135, 5, '<img src="img/Logo CDID.png"/>', 0, 0, 0, true);

        PDF::setCellPaddings(20, '', 20, '');
        // PDF::writeHTMLCell(0, 0, '', 85, $text."\n");
        PDF::MultiCell(0, 0, $text."\n", 0, 'J', 0, 1, '', 83, true, 0, false, false);

        PDF::MultiCell(0, 0, $ciudad.", ".$fecha, 0, 'R', 0, 1, '', 218, true, 0, false, false);

        // PDF::write(0, $output, '', 0, 'J', true, 0, false, false, 0);
        PDF::Output('Certificado.pdf');

    }
}
