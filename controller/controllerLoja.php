<?php

require_once '../configs/sm.php';
include_once '../model/Loja.php';

$lojas = Loja::listaLojas();

$sm->assign("lojas",$lojas);

$sm->display('../view/loja.html');