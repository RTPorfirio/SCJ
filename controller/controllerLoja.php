<?php

require_once '../configs/sm.php';
include_once '../model/Loja.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $sm->assign("usuario", $usuario);

    $lojas = Loja::listaLojas();

    $sm->assign("lojas", $lojas);

    $sm->display('../view/loja.html');
} else {
    header("location:../index.php?&erro=\"Login\"");
}