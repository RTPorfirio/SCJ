<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Vendedor.php';

$opc = addslashes(trim($_GET['opc']));


if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));

    $vendedor = Vendedor::listaVendedor($cod);

    $sm->assign("nomeVendedor", $vendedor->getNome_vendedor());
    $sm->assign("bairro", $vendedor->getBairro());
    $sm->assign("cep", $vendedor->getCep());
    $sm->assign("cidade", $vendedor->getCidade());
    $sm->assign("cmp", $vendedor->getComplemento());
    $sm->assign("estado", $vendedor->getEstado());
    $sm->assign("rua", $vendedor->getLogradouro());
    $sm->assign("numero", $vendedor->getNumero());
    $sm->assign("telefone", $vendedor->getTelefone());
    $sm->assign("celular", $vendedor->getCelular());
    $sm->assign("rg", $vendedor->getRg());
    $sm->assign("cpf", $vendedor->getCpf());

    $sm->assign("cod", $cod);
    $sm->assign("opc", $opc);
    $sm->display("../view/manterVendedor.html");
} else {
    if ($opc == "Incluir") {
        $sm->assign("opc", $opc);
        $sm->display("../view/manterVendedor.html");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $sm->assign("cod", $cod);
        $sm->assign("tipo", "Vendedor");
        $sm->display("../view/remover.html");
    }
}