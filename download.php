<?php
require('tcpdf/fpdf.php'); // Asegúrate de proporcionar la ubicación correcta de fpdf.php

if (file_exists("saved_content.txt")) {
    // Leer la descripción desde el archivo
    $content = file_get_contents("saved_content.txt");

    // Crear una instancia de FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Definir encabezado
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Vet Clinic', 0, 1, 'C');


    $pdf->Image('img/logo1.png',10,12,30,0,'','http://www.fpdf.org');
    $pdf->SetLeftMargin(45);
    $pdf->SetFontSize(14);
    

    // Título de la sección de contenido
    $pdf->SetFont('Arial', 'B', 12);
    
    $pdf->SetFont('Arial', '', 12);

    // Agregar descripción al PDF
    $pdf->MultiCell(0, 10, "Descripcion: " . $content);

    // Establecer las cabeceras para la descarga del PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="factura.pdf"');

    // Salida del PDF generado
    $pdf->Output();

    // Eliminar el archivo de texto
    unlink("saved_content.txt");
} else {
    echo "El contenido no está disponible para descargar.";
}
?>


