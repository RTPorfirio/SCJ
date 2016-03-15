<?php

require_once '../configs/sm.php';
include_once '../model/Vendedor.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario",$usuario);

$vendedores = Vendedor::listaVendedores();

$sm->assign("vendedores",$vendedores);

$sm->assign("nome","Cris");

$sm->display('../view/vendedor.html');
} else {
    header("location:../index.php?&erro=\"Login\"");
}