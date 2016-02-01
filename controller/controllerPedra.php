<?php

require_once '../configs/sm.php';
include_once '../model/Pedra.php';

$pedras = Pedra::listaPedras();

$sm->assign("pedras",$pedras);

$sm->display('../view/pedra.html');

