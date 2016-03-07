<?php

include '../SCJ/inc/fpdf/fpdf.php';

$pdf = new FPDF("P", "pt", "A4");

$pdf->AddPage();



$posY = 3;
$posX = 3;
for ($k = 1; $k <= 80; $k++) {


    for ($j = 1; $j <= 5; $j++) {

        $pdf->Image('../SCJ/etiquetas/g.png', $posX, $posY, 114, 38);
        $posX+=119;
    }
    if ($posY < 748) {
        $posY+=45;
    } 
    $posX = 3;
}

$pdf->Output("arquivo.pdf", "D");
?>