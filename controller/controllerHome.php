<?php

require_once '../configs/sm.php';
include_once '../model/Mural.php';

$mural = Mural::listaMural(1);

$sm->assign("nome","Ricardo");
$sm->assign("mural",$mural);

$sm->display('../view/home.html');

