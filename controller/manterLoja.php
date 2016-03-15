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
$loja = new Loja();

$nomeLoja = null;
$tel = null;
$rua = null;
$bairro = null;
$cidade = null;
$cep = null;
$estado = null;
$numero = null;
$complemento = null;

if ($opc != "Remover") {

    $nomeLoja = addslashes(trim($_POST['nome']));
    $tel = addslashes(trim($_POST['tel']));
    $rua = addslashes(trim($_POST['rua']));
    $bairro = addslashes(trim($_POST['bairro']));
    $cidade = addslashes(trim($_POST['cidade']));
    $cep = addslashes(trim($_POST['cep']));
    $estado = addslashes(trim($_POST['estado']));
    $numero = addslashes(trim($_POST['numero']));
    $complemento = addslashes(trim($_POST['cmp']));
}



if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $loja = Loja::listaLoja($cod);
    $loja->setNome_loja($nomeLoja);
    $loja->setTelefone($tel);
    $loja->setLogradouro($rua);
    $loja->setBairro($bairro);
    $loja->setCidade($cidade);
    $loja->setCep($cep);
    $loja->setEstado($estado);
    $loja->setNumero($numero);
    $loja->setComplemento($complemento);
    Loja::editaLoja($loja);
    header("location:../controller/controllerLoja.php");
} else {
    if ($opc == "Incluir") {
        $loja = new Loja();
    $loja->setNome_loja($nomeLoja);
    $loja->setTelefone($tel);
    $loja->setLogradouro($rua);
    $loja->setBairro($bairro);
    $loja->setCidade($cidade);
    $loja->setCep($cep);
    $loja->setEstado($estado);
    $loja->setNumero($numero);
    $loja->setComplemento($complemento);
        Loja::insereLoja($loja);
        header("location:../controller/controllerLoja.php");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if ($escolha == "Sim") {
            Loja::deletaLoja($cod);
            header("location:../controller/controllerLoja.php");
        } else {
            header("location:../controller/controllerLoja.php");
        }
    }
}


} else {
    header("location:../index.php?&erro=\"Login\"");
}