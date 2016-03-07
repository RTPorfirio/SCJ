<?php

include_once '../inc/phpqrcode/qrlib.php';
header("Content-type: image/png");

function geraEtiqueta($qrcode, $text, $preco) {
    $im = @imagecreate(150, 38)
            or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($im, 20, 243, 243);

    QRcode::png($qrcode, "../img.png", 2, 1.66, 1);
    $im2 = imagecreatefrompng("../img.png");


    $corTexto = imagecolorallocate($im, 0, 0, 0);
    imagestring($im, 2, 38, 0, $text, $corTexto); // Altere "TESTE" para uma variavel que irá receber o cod_base

    $corTexto2 = imagecolorallocate($im, 0, 0, 0);
    imagestring($im, 3, 38, 20, "RS ".$preco, $corTexto2); // Altere "TESTE" para uma variavel que irá receber o cod_base

    imagecopymerge($im, $im2, 0, 0, 0, 0, 38, 38, 100);
    
    imagepng($im,"../etiquetas/".$qrcode.".png");

    
    imagedestroy($im);
    

}

?>