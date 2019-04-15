<?php
require('fpdf/fpdf.php');
require('config/database.php');

class PDF extends FPDF
{
// Cabecera de página


function Header()
{
    // Logo
    $this->Image('assets/img/inred_logo.png',5,5,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(30);
    // Título
    $this->Cell(120,10,'REPORTE DE PROYECTOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

}
?>