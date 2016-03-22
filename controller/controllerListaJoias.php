<?php

include_once '../configs/sm.php';
include_once '../model/Joia.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $sm->assign("usuario", $usuario);
    $sm->assign("joias",Joia::listaJoias());
    
    $sm->display("../view/visualizarJoia.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}
?>