<?php

include '../inc/fpdf/fpdf.php';
session_start();

if ($_SESSION['login'] == "true") {
function geraEtiquetasPDF($qrcode, $qnt,$nome) {

    $pdf = new FPDF("P", "pt", "A4");

    $pdf->AddPage();

    $posY = 3;
    $posX = 5;
    $controle = 0;
    $qntElementos = 1;
    for ($k = 1; $k <= 80; $k+=4) { // linha
        for ($j = 1; $j <= 5; $j++) { // coluna          
            $pdf->Image("../etiquetas/$qrcode[$controle].png", $posX, $posY, 114, 38);
            $controle++;
            $posX+=119;
            
                if ($qntElementos == $qnt) {
                    $k = 80;
                    $j = 5;
                }
            
            $qntElementos++;
        }
        if ($posY < 748) {
            $posY+=45;
        }
        $posX = 3;

        
    }

    $pdf->Output("../relatorios/etiquetas/$nome.pdf", "F");
}
} else {
    header("location:../index.php?&erro=\"Login\"");
}
?>