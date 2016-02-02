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

$tipo = Tipo::listaTipos();
$cor = Cor::listaCores();
$loja = Loja::listaLojas();
$pedra = Pedra::listaPedras();

$sm->assign("tipos", $tipo);
$sm->assign("cores", $cor);
$sm->assign("pedras", $pedra);
$sm->assign("lojas", $loja);
$sm->assign("nome", "Ricardo");


$sm->display("../view/manterJoia.html");
