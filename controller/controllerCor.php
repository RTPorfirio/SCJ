<?php

require_once '../configs/sm.php';
include_once '../model/Cor.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario", $usuario);

$cores = Cor::listaCores();

$sm->assign("cores",$cores);
$sm->assign("nome","Ricardo");

$sm->display('../view/cor.html');

} else {
    header("location:../index.php?&erro=\"Login\"");
}