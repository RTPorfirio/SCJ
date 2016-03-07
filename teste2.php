<?php

include '../SCJ/inc/fpdf/fpdf.php';
include_once '../SCJ/model/Vendedor.php';




$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 8);

$pdf->Image("../SCJ/view/images/logo.png");

$vendedor = Vendedor::listaVendedores();

$pdf->Cell(2, 1, 'id', 1, 0, 'C');
$pdf->Cell(3, 1, 'Nome vendedor', 1, 0, 'C');
$pdf->Cell(3, 1, 'Telefone', 1, 0, 'C');
$pdf->Cell(5, 1, 'Celular', 1, 0, 'C');
$pdf->Ln();


foreach ($sql as $resultado) {

    $pdf->Cell(2, 1, $resultado['id_vendedor'], 1, 0, 'C');
    $pdf->Cell(5, 1, $resultado['nome_vendedor'], 1, 0, 'C');
    $pdf->Cell(5, 1, $resultado['telefone'], 1, 0, 'C');
    $pdf->Cell(5, 1, $resultado['celular'], 1, 0, 'C');
    $pdf->Ln();
}

$pdf->Output("arquivo.pdf", "D");
?>