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
        PDF::AddPage();

        PDF::setImageScale ( 15 );
        PDF::writeHTMLCell(100, 50, 20, 10, '<img src="img/Logo UCM.png"/>');
        PDF::setImageScale ( 7 );
        PDF::writeHTMLCell(180, 50, 10, 7, '<img src="img/Logo CDID.png"/>', 0, 0, 0, true, 'R');

        // PDF::SetMargins(20, 20, 14, true);

        $titulo = <<<EOD
        CONSTANCIA DE PARTICIPACIÓN
        EOD;

        $texto = <<<EOD
            SRA. ANA JARA ROJAS, Directora General de Docencia de la Universidad Católica del Maule, deja constancia que la académica Sra. Dominique Alicia De Solminihac Ramírez, RUN 6613322-2, participó en el taller “¿Cómo buscar información científica y no fallar en el intento?” organizado por el Centro de Desarrollo e Innovación Docente (CDID), realizado el día 07 de septiembre del 2022, con una duración total de 1,5 horas.
            Los contenidos abordados fueron: Alfabetización informacional, Identificar necesidad de información, Delimitar el tema, Identificar conceptos principales, Tesauros, Operadores booleanos, Estrategias de búsqueda, Operadores de proximidad, Símbolos de truncamiento, Recurso de información, Evaluación de la información, Fuentes de información, Criterios de valoración, Recursos de información SIBIB, Búsquedas de información, Fake News, Uso ético de la información y Gestores bibliográficos.
            Se extiende la presente constancia de participación a petición de la interesada para los fines que estime convenientes.
        EOD;


        PDF::MultiCell(55, 5, $titulo."\n", 1, 'J', 1, 2, '' ,'', true);

        // PDF::write(0, $output, '', 0, 'J', true, 0, false, false, 0);
        PDF::Output('Certificado.pdf');

    }
}
