<?php

include_once './view/phpqrcode/qrlib.php';
header("Content-type: image/png");

$im = @imagecreate(150, 38)
    or die("Cannot Initialize new GD image stream");
   
$background_color = imagecolorallocate($im, 20,243,243);

QRcode::png("text", "./img.png", 2, 1.66, 1);
$im2 = imagecreatefrompng("./img.png");


$corTexto = imagecolorallocate( $im, 255, 0, 0 );
imagestring( $im, 2, 38, 0, "Teste", $corTexto ); // Altere "TESTE" para uma variavel que irá receber o cod_base

$corTexto2 = imagecolorallocate( $im, 0, 0, 0 );
imagestring( $im, 3, 38, 20, "Teste", $corTexto2 ); // Altere "TESTE" para uma variavel que irá receber o cod_base

imagecopymerge($im, $im2,0,0,0,0, 38, 38,100);



imagepng($im);
imagedestroy($im);


?>