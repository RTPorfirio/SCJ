<?php

include_once '../configs/sm.php';
include_once '../model/Joia.php';
include_once '../model/Tipo.php';
include_once '../model/Cor.php';
include_once '../model/Pedra.php';
include_once '../model/Loja.php';
include_once '../model/Usuario.php';
session_start();

if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $sm->assign("usuario", $usuario);

    $getId = $_GET['id'];
    $getTipo = $_GET['tipo'];
    $getLoja = $_GET['loja'];
    $getCor = $_GET['cor'];
    $getPedra = $_GET['pedra'];

    $joia = Joia::listaJoia($getId);
    $tipo = Tipo::listaTipo($getTipo);
    $cor = Cor::listaCor($getCor);
    $loja = Loja::listaLoja($getLoja);
    $pedra = Pedra::listaPedra($getPedra);

    $sm->assign("joia", $joia);
    $sm->assign("tipo", $tipo);
    $sm->assign("cor", $cor);
    $sm->assign("loja", $loja);
    $sm->assign("pedra", $pedra);



    $sm->display("../view/ListaJoiaIndividual.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}
?>