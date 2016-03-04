<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../model/Vendedor.php';
require_once '../configs/sm.php';


$cod = addslashes(trim($_GET['cod']));

$vendedor = new Vendedor();
$vendedor = Vendedor::listaVendedor($cod);

$path = "../vendedores/" . $vendedor->getPasta();
$diretorio = dir($path);
$i = 1;


$sm->assign("cabecalho", "Pasta do vendedor " . $vendedor->getNome_vendedor() . "<br><br>");
$sm->assign("nome","PQP");
$sm->assign("cod",$path);
$sm->assign("id",$cod);

$link = array();





while ($arquivo = $diretorio->read()) {

    if ($i > 2) {
        array_push($link,$path."/".$arquivo );
        array_push($link,$arquivo);
    }
    $i++;
}
$sm->assign("arquivos", $link);
$diretorio->close();


$sm->display('../view/manterPasta.html');
