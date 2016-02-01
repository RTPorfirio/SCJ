<?php

require_once '../configs/sm.php';
include_once '../model/Cor.php';

$cores = Cor::listaCores();

$sm->assign("cores",$cores);
$sm->assign("nome","Ricardo");

$sm->display('../view/cor.html');

