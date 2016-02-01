<?php

require_once '../configs/sm.php';
include_once '../model/Vendedor.php';

$vendedores = Vendedor::listaVendedores();

$sm->assign("vendedores",$vendedores);

$sm->display('../view/vendedor.html');