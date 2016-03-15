<?php

require_once '../configs/sm.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $usuarios = Usuario::listaUsuarios();

    $sm->assign("usuarios", $usuarios);
    $sm->assign("usuario", $usuario);

    $sm->display('../view/usuario.html');
} else {
    header("location:../index.php?&erro=\"Login\"");
}