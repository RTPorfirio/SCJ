<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/Upload.php';
include_once '../model/Joia.php';

$upLoad = new Upload($_FILES["imagem"]);

$imagem  = $upLoad->getNome();

$img = $_FILES['imagem'];
$pCusto = addslashes(trim($_POST['pcusto']));
$pVenda = addslashes(trim($_POST['pvenda']));
$consig = addslashes(trim($_POST['consignado']));
$qnt = addslashes(trim($_POST['quantidade']));
$notaFiscal = addslashes(trim($_POST['notaFiscal']));
$tipo = addslashes(trim($_POST['tipo']));
$fornecedor = addslashes(trim($_POST['loja']));
$cor = addslashes(trim($_POST['cor']));
$pedra = addslashes(trim($_POST['pedra']));
$tamanho = addslashes(trim($_POST['tamanho']));
$obs = addslashes(trim($_POST['obs']));

if($consig){
    $consig = "c";
}
else{
    $consig = "";
}

$codBase = $consig.$tipo.$pedra.$cor.$fornecedor;
$codBaseOriginal=$codBase;
$qrCode = $codBase."R$".$pVenda;
$qrCodeOriginal = $qrCode;


$j;
if(Joia::SelecionaUltimoId()['MAX(id_joia)']==""){
    $j=(int)1;
}
else{
    $j=(int)Joia::SelecionaUltimoId()['MAX(id_joia)']+1;
}



for($i=1;$i<=$qnt;$i++){
   $codBase = $codBase.$j;
   $qrCode = $codBase."R$".$pVenda;
   $j++;
   $joia = new Joia($pCusto,$pVenda,$consig,$notaFiscal,$obs,$codBase,$qrCode,$tamanho,$imagem); 
   $joia->insereJoia($joia);
   $codBase = $codBaseOriginal;
   $qrCode = $qrCodeOriginal;
}

$upLoad->makeUpload();

    header("location:../controller/controllerHome.php");