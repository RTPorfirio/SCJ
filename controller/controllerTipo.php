<?php

require_once '../configs/sm.php';
include_once '../model/Tipo.php';

$tipos = Tipo::listaTipos();

$sm->assign("tipos",$tipos);

$sm->display('../view/tipo.html');

