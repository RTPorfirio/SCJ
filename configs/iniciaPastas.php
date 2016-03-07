<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../model/Vendedor.php';

$id = $_GET['id'];

$nome = Vendedor::listaVendedor($id);

$path = "../vendedores/" . $nome->getPasta();
$diretorio = dir($path);
$i = 1;
$link = array();

while ($arquivo = $diretorio->read()) {

    if ($i > 2) {
        if($i==3){
        echo "<option value=".$arquivo." class = \"pastas\" selected>".$arquivo."</option>";
        }else{
            echo "<option value=".$arquivo." class = \"pastas\">".$arquivo."</option>";
        }
    }
    $i++;
}


