<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Tipo.php';

session_start();

if ($_SESSION['login'] == "true") {

$opc = addslashes(trim($_GET['opc']));
if($opc!="Remover")
    $nomeTipo = addslashes(trim($_POST['nome']));

if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $tipo = Tipo::listaTipo($cod);
    $tipo->setNome_tipo($nomeTipo);
    Tipo::editaTipo($tipo);
    header("location:../controller/controllerTipo.php");
}else{
    if($opc=="Incluir"){
    $tipo = Tipo::listaTipo($cod);
    $tipo->setNome_tipo($nomeTipo);
    Tipo::insereTipo($tipo);
    header("location:../controller/controllerTipo.php");
    }
    else{
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if($escolha=="Sim"){
            Tipo::deletaTipo($cod);
            header("location:../controller/controllerTipo.php");
        }
        else{
            header("location:../controller/controllerTipo.php");
        }
    }
    
}


} else {
    header("location:../index.php?&erro=\"Login\"");
}