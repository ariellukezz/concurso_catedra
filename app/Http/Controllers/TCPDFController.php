<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;

class TCPDFController extends Controller
{
    public function generatePdf()
    {
        // Ruta a tu archivo de fuente TrueType (.ttf)
        $fontPath = public_path('fonts/BarlowCondensed-Regular.ttf');

        // Crear una instancia de TCPDF
        $pdf = new TCPDF();

        // Agregar página
        $pdf->AddPage();

        // Cargar la fuente TrueType
        $fontname = $pdf->addTTFfont($fontPath, 'TrueTypeUnicode', '', 32);

        // Establecer la fuente
        $pdf->SetFont($fontname, '', 14);

        // Escribir texto en la fuente personalizada
        $pdf->Cell(0, 10, 'Ejemplo de texto con fuente personalizada', 0, 1);

        // Generar y mostrar el PDF en el navegador
        $pdf->Output('ejemplo.pdf', 'I');
    }



}
