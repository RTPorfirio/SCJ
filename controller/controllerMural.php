<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../model/Mural.php';

session_start();

if ($_SESSION['login'] == "true") {
$mural = addslashes(trim($_POST['mural']));

$muralNovo = new Mural(1,$mural);
$muralAntigo = Mural::listaMural(1);

Mural::deletaMural(1);
Mural::insereMural($muralNovo);

header("location:../controller/controllerHome.php");
} else {
    header("location:../index.php?&erro=\"Login\"");
}