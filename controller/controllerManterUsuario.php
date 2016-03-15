<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Usuario.php';
session_start();





if ($_SESSION['login'] == "true") {
    $opc = addslashes(trim($_GET['opc']));
    @$cod = addslashes(trim($_GET['cod']));

    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $usuarioNovo = Usuario::listaUsuario($cod);
    
    if ($opc == "Editar") {

        $sm->assign("usuarioNovo", $usuarioNovo);
$sm->assign("usuario", $usuario);

        $sm->assign("cod", $cod);
        $sm->assign("opc", $opc);
        $sm->display("../view/manterUsuario.html");
    } else {
        
        if ($opc == "Incluir") {
            $sm->assign("usuario", $usuario);
            $sm->assign("opc", $opc);
            $sm->display("../view/manterUsuario.html");
        } else {
$sm->assign("usuario", $usuario);
            $sm->assign("cod", $cod);
            $sm->assign("tipo", "Usuario");
            $sm->display("../view/remover.html");
        }
    }
} else {
    header("location:../index.php?&erro=\"Login\"");
}