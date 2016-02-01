<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Tipo.php';

$opc = addslashes(trim($_GET['opc']));


if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $tipo = Tipo::listaTipo($cod);
    $sm->assign("nomeTipo", $tipo->getNome_tipo());
    $sm->assign("cod", $cod);
    $sm->assign("opc", $opc);
    $sm->display("../view/manterTipo.html");
} else {
    if ($opc == "Incluir") {
        $sm->assign("opc", $opc);
        $sm->display("../view/manterTipo.html");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $sm->assign("cod", $cod);
        $sm->assign("tipo", "Tipo");
        $sm->display("../view/remover.html");
    }
}