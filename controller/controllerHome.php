<?php


require_once '../configs/sm.php';
include_once '../model/Mural.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {

    $usuario = Usuario::listaUsuario($_SESSION['usuario']);


    $mural = Mural::listaMural(1);

    $sm->assign("usuario", $usuario);
    $sm->assign("mural", $mural);

    $sm->display('../view/home.html');
} else {
    header("location:../index.php?&erro=\"Login\"");
}