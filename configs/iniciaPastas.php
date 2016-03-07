<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function obtemPastas(){
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

return $link;
}