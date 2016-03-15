<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Cor.php';

session_start();

if ($_SESSION['login'] == "true") {
    

$opc = addslashes(trim($_GET['opc']));
if($opc!="Remover")
    $nomeCor = addslashes(trim($_POST['nome']));

if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $cor = Cor::listaCor($cod);
    $cor->setNome_cor($nomeCor);
    Cor::editaCor($cor);
    header("location:../controller/controllerCor.php");
}else{
    if($opc=="Incluir"){
    $cor = Cor::listaCor($cod);
    $cor->setNome_cor($nomeCor);
    Cor::insereCor($cor);
    header("location:../controller/controllerCor.php");
    }
    else{
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if($escolha=="Sim"){
            Cor::deletaCor($cod);
            header("location:../controller/controllerCor.php");
        }
        else{
            header("location:../controller/controllerCor.php");
        }
    }
    
}
} else {
    header("location:../index.php?&erro=\"Login\"");
}



