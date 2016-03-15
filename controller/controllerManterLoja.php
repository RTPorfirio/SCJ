<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Loja.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $sm->assign("usuario", $usuario);
    
$opc = addslashes(trim($_GET['opc']));


if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    
    $loja = Loja::listaLoja($cod);
    
    $sm->assign("nomeLoja", $loja->getNome_loja());
    $sm->assign("bairro", $loja->getBairro());
    $sm->assign("cep", $loja->getCep());
    $sm->assign("cidade", $loja->getCidade());
    $sm->assign("cmp", $loja->getComplemento());
    $sm->assign("estado", $loja->getEstado());
    $sm->assign("rua", $loja->getLogradouro());
    $sm->assign("numero", $loja->getNumero());
    $sm->assign("telefone", $loja->getTelefone());
    
    $sm->assign("cod", $cod);
    $sm->assign("opc", $opc);
    $sm->display("../view/manterLoja.html");
} else {
    if ($opc == "Incluir") {
        $sm->assign("opc", $opc);
        $sm->display("../view/manterLoja.html");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $sm->assign("cod", $cod);
        $sm->assign("tipo", "Loja");
        $sm->display("../view/remover.html");
    }
}
} else {
    header("location:../index.php?&erro=\"Login\"");
}