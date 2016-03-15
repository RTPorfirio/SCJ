<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Joia.php';
include_once '../model/Tipo.php';
include_once '../model/Loja.php';
include_once '../model/Cor.php';
include_once '../model/Pedra.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
$usuario = Usuario::listaUsuario($_SESSION['usuario']);
$sm->assign("usuario", $usuario);


$tipo = Tipo::listaTipos();
$cor = Cor::listaCores();
$loja = Loja::listaLojas();
$pedra = Pedra::listaPedras();

$sm->assign("tipos", $tipo);
$sm->assign("cores", $cor);
$sm->assign("pedras", $pedra);
$sm->assign("lojas", $loja);



$sm->display("../view/manterJoia.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}