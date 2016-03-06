<?php
header("Content-type: image/png");
$im = @imagecreate(150, 38)
    or die("Cannot Initialize new GD image stream");

$background_color = imagecolorallocate($im, 243,243,243);
$im2 = @imagecreate(38, 38) //im2 receberá o qr_code que vc gerou
    or die("Cannot Initialize new GD image stream");
$background_color2 = imagecolorallocate($im2, 255, 00, 00);

$corTexto = imagecolorallocate( $im, 0, 0, 0 );
imagestring( $im, 2, 38, 0, "Teste", $corTexto ); // Altere "TESTE" para uma variavel que irá receber o cod_base

$corTexto2 = imagecolorallocate( $im, 0, 0, 0 );
imagestring( $im, 3, 38, 20, "Teste", $corTexto ); // Altere "TESTE" para uma variavel que irá receber o cod_base


imagecopymerge($im, $im2,0,0,0,0, 38, 38,100);



imagepng($im);
imagedestroy($im);
?>