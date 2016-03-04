<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pasta = addslashes(trim($_POST['novaPasta']));
$local = addslashes(trim($_GET['dir']));
$cod = addslashes(trim($_GET['cod']));
$novaPasta = $local."/".$pasta;
mkdir($novaPasta);

header("location:../controller/controllerPasta.php?cod=$cod");