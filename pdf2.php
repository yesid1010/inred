<?php
include 'pdf.php';
require('config/database.php');

$query = mysqli_query($mysqli, "SELECT * FROM proyectos")
or die('error: '.mysqli_error($mysqli));



$pdf =  new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(45,6,'',0,0,'C');
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(60,6,'NOMBRE',1,0,'C',1);
$pdf->Ln(6);
$pdf->SetFont('Arial','',10);
while ($data = mysqli_fetch_assoc($query)) { 
        $pdf->Cell(45,6,'',0,0,'C');
        $pdf->Cell(20,6,$data['idproyecto'],1,0,'C',2);
        $pdf->Cell(60,6,$data['nombre'],1,0,'L',2);
        $pdf->Ln(6);
}

$pdf->Output();
?>