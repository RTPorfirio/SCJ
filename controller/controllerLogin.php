<?php

include_once '../model/Usuario.php';
include_once '../configs/sm.php';

$user = $_POST['usuario'];
$senha = md5($_POST['senha']);



$usuario = Usuario::Login($user, $senha);


session_start();
$_SESSION['login'] = "false";
if (!is_null($usuario)) {
    $_SESSION['login'] = "true";
    $_SESSION['usuario'] = $usuario->getId_usuario();
    header("location:ControllerHome.php");
} else
    header("location:../index.php?&erro=\"Falha\"");