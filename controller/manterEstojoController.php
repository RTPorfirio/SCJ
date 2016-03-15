<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include_once '../model/Transita.php';
include_once '../model/Joia.php';

session_start();

if ($_SESSION['login'] == "true") {

    $cod = $_POST['s'];

        $teste = $_POST['read'];


    Transita::insereTransita($cod);
    $joia = Joia::listaJoiaQR($cod,0);

    $joia->setValida(0);
    Joia::EditaValida($joia);


    header("location:../controller/controllerEstojo.php");

    } else {
    header("location:../index.php?&erro=\"Login\"");
}