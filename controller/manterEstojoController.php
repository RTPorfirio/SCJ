<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include_once '../model/Transita.php';
include_once '../model/Joia.php';



    $cod = $_POST['s'];




    Transita::insereTransita($cod);
    $joia = Joia::listaJoiaQR($cod,0);
    echo $joia->getValida($joia);
    $joia->setValida(0);
    //Joia::EditaValida($joia); // <<-- erro aqui


    header("location:../controller/controllerEstojo.php");
