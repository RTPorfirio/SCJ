<?php

include '../model/Joia.php';
include './relatorioEtiquetas.php';
include '../configs/sm.php';
include_once '../model/Usuario.php';

@session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario", $usuario);
$joia = Joia::listaJoias();
$inicio = array();
$fim = array();
$qntFolhas = 0;


array_map('unlink', glob("../relatorios/etiquetas/*.pdf"));

$inicioC = 0;
$fimC = 89;
$qnt90 = 0;
$resto = 0;
for ($i = 1; $i <= sizeof($joia); $i++) {
    if ($i % 90 == 0) {
        array_push($fim, $fimC);
        array_push($inicio, $inicioC);
        $qntFolhas++;
        $inicioC+=90;
        $fimC+=90;
        $qnt90++;
    } else {
        if ($i == sizeof($joia) - 1) {
            $fimC = (sizeof($joia) - 1);
            array_push($fim, $fimC);
            array_push($inicio, $inicioC);
            $qntFolhas++;
            $resto = (sizeof($joia) - 1) - ($qnt90*90);
        }
    }
}



for ($i = 0; $i < $qntFolhas; $i++) {
    $armazena = array();
    for ($j = $inicio[$i]; $j <= $fim[$i]; $j++) {
        array_push($armazena, $joia[$j]->getQr_code());
    }
    
    if ($qnt90 != 0) {
       geraEtiquetasPDF($armazena, 90, "Folha" . ($i + 1));
        $qnt90--;
    } else {
        geraEtiquetasPDF($armazena, $resto+1, "Folha" . ($i + 1));
    }
}


$link = array();



$path = "../relatorios/etiquetas";
$diretorio = dir($path);
$i=1;
while ($arquivo = $diretorio->read()) {

    if ($i> 2) {
        array_push($link,$arquivo);
    }
    $i++;
}


$sm->assign("arquivos", $link);
$sm->display("../view/qrCodes.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}
?>