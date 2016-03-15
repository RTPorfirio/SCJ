<?php

require_once '../configs/sm.php';
include_once '../model/Tipo.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario", $usuario);

$tipos = Tipo::listaTipos();

$sm->assign("tipos",$tipos);

$sm->display('../view/tipo.html');

} else {
    header("location:../index.php?&erro=\"Login\"");
}