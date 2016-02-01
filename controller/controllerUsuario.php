<?php

require_once '../configs/sm.php';
include_once '../model/Usuario.php';

$usuarios = Usuario::listaUsuarios();

$sm->assign("usuarios",$usuarios);

$sm->display('../view/usuario.html');