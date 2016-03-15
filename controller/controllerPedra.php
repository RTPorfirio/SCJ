<?php

require_once '../configs/sm.php';
include_once '../model/Pedra.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario", $usuario);

$pedras = Pedra::listaPedras();

$sm->assign("pedras",$pedras);

$sm->display('../view/pedra.html');

} else {
    header("location:../index.php?&erro=\"Login\"");
}