<?php

require_once './configs/sm.php';
include_once './model/Usuario.php';

session_start();
if (!isset($_SESSION["conecta"])) {
        @$sm->display("./view/home.html");
} else {
    if ($_SESSION["conecta"] == "logado") {
        $sm->assign("conecta", $_SESSION["conecta"]);
        $sm->assign("nome", $_SESSION["usuario"]->getNome_usuario());
        $sm->display("./view/home.html");
    }
}   