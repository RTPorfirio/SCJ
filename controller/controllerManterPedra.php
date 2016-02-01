<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Pedra.php';

$opc = addslashes(trim($_GET['opc']));


if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $pedra = Pedra::listaPedra($cod);
    $sm->assign("nomePedra", $pedra->getNome_Pedra());
    $sm->assign("cod", $cod);
    $sm->assign("opc", $opc);
    $sm->display("../view/manterPedra.html");
} else {
    if ($opc == "Incluir") {
        $sm->assign("opc", $opc);
        $sm->display("../view/manterPedra.html");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $sm->assign("cod", $cod);
        $sm->assign("tipo", "Pedra");
        $sm->display("../view/remover.html");
    }
}