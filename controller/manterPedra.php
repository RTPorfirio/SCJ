<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Pedra.php';

session_start();

if ($_SESSION['login'] == "true") {

$opc = addslashes(trim($_GET['opc']));
if($opc!="Remover")
    $nomePedra = addslashes(trim($_POST['nome']));

if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $pedra = Pedra::listaPedra($cod);
    $pedra->setNome_pedra($nomePedra);
    Pedra::editaPedra($pedra);
    header("location:../controller/controllerPedra.php");
}else{
    if($opc=="Incluir"){
    $pedra = Pedra::listaPedra($cod);
    $pedra->setNome_pedra($nomePedra);
    Pedra::inserePedra($pedra);
    header("location:../controller/controllerPedra.php");
    }
    else{
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if($escolha=="Sim"){
            Pedra::deletaPedra($cod);
            header("location:../controller/controllerPedra.php");
        }
        else{
            header("location:../controller/controllerPedra.php");
        }
    }
    
}




} else {
    header("location:../index.php?&erro=\"Login\"");
}