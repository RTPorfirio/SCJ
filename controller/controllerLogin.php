<?php

include_once '../model/Usuario.php';

$usuario = addslashes(trim($_POST['usuario']));
$senha = addslashes(trim($_POST['senha']));

if (empty($usuario)) {
    header("location:../index.php?&erro=1");
} else {
    if (empty($senha)) {
        header("location:../index.php?&erro=2");
    } else {
        $u = new Usuario($usuario, $senha);
        $usuario = Usuario::Login($u);
        if ($u->verificaLogin($usuario)) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            $_SESSION["conecta"] = "logado";
            header("location:../home.php");
        } else {
            header("location:../index.php?&erro=3");
        }
    }
}