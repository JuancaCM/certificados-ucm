<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        PDF::SetFont('dejavusans', '', 10, '', true);
        PDF::SetTitle('Certificado');
        PDF::SetMargins(30, 10, 0, true);
        PDF::AddPage();

    	$html = <<<EOD

        EOD;

        PDF::setImageScale ( 15 );
        PDF::Image("img/Logo UCM.png");
        PDF::Image("img/Logo CDID.png");
        PDF::writeHTML($html, true, false, true, false, '');
        PDF::Output('hello_world.pdf');

    }
}
