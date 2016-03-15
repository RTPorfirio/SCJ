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
$usuario = new Usuario();

$nomeUsuario = null;
$login = null;
$senha = null;


if ($opc != "Remover") {

    $nomeUsuario = addslashes(trim($_POST['nome']));
    $login = addslashes(trim($_POST['login']));
    $senha = addslashes(trim($_POST['senha']));

}



if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $usuario = Usuario::listaUsuario($cod);
    setaDados($usuario, $nomeUsuario, $senha, $login);
    Usuario::editaUsuario($usuario);
    header("location:../controller/controllerUsuario.php");
} else {
    if ($opc == "Incluir") {
        $usuario = new Usuario();
        setaDados($usuario, $nomeUsuario, $senha, $login);
        Usuario::lnsereUsuario($usuario);
        header("location:../controller/controllerUsuario.php");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if ($escolha == "Sim") {
            Usuario::deletaUsuario($cod);
            header("location:../controller/controllerUsuario.php");
        } else {
            header("location:../controller/controllerUsuario.php");
        }
    }
}

function setaDados($usuario, $nomeUsuario, $senha, $login ){
    $usuario->setNome_usuario($nomeUsuario);
    $usuario->setLogin($login);
    $usuario->setSenha($senha);

}
} else {
    header("location:../index.php?&erro=\"Login\"");
}
