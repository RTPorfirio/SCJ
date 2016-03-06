<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Vendedor.php';
include_once '../model/Transita.php';
include_once '../model/Joia.php';
include_once '../model/Tipo.php';
include_once '../model/Cor.php';
include_once '../model/Pedra.php';
include_once '../model/Loja.php';



$vendedor = Vendedor::listaVendedores();
$sm->assign("vendedores", $vendedor);



$dados = Transita::listaTransitas();

$joias = array();
$tipos = array();
$texto = " ";
$precoTotal = 0.00;



if($dados[0]){
foreach ($dados as $dado) {
    $joia = Joia::listaJoiaQR($dado,1);
    if ($joia != null) {
        $precoTotal+=$joia->getPreco_venda();
        array_push($joias, $joia);
        $texto = "-------------------------";
        $texto = $texto . "\nProduto: " . Tipo::listaTipo($joia->getTipo())->getNome_tipo() . "\n";
        $texto = $texto . "Pedra: " . Pedra::listaPedra($joia->getPedra())->getNome_pedra() . "\n";
        $texto = $texto . "Cor: " . Cor::listaCor($joia->getCor())->getNome_cor() . "\n";
        $texto = $texto . "Fornecedor: " . Loja::listaLoja($joia->getLoja())->getNome_loja();
        array_push($tipos, $texto);
        $texto = '';
    }
}
}
if (!isset($pastaParametro)) {
    $nome = Vendedor::listaVendedor(1);
} else {
    $pastaParametro = $_GET['pastaParametro'];
    $nome = $pastaParametro;
}
$path = "../vendedores/" . $nome->getPasta();
$diretorio = dir($path);
$i = 1;
$link = array();
while ($arquivo = $diretorio->read()) {

    if ($i > 2) {
        array_push($link, $arquivo);
    }
    $i++;
}


//exit();


$diretorio->close();

$sm->assign("arquivos", $link);
$sm->assign('venda', $precoTotal);
$sm->assign('tipos', $tipos);
$sm->assign('estojo', $joias);
$sm->display("../view/estojo.html");
