<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../model/Joia.php';
include_once '../model/JoiaEstojo.php';
include_once '../model/Transita.php';



$vendedor = $_POST['v1'];

$pasta = $_POST['pastas'];

$dados = Transita::listaTransitas();

if ($dados) {
    foreach ($dados as $dado) {

        
        $joia = Joia::listaJoiaQR($dado->getNome_transita(), 1);
        JoiaEstojo::EstojoinsereJoia($joia);
        Joia::deletaJoia($joia->getId_joia());
        Transita::deletaTransita();
    }
}


       



echo $vendedor;
echo $pasta;