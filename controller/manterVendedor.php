<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../configs/sm.php';
include_once '../model/Vendedor.php';

$opc = addslashes(trim($_GET['opc']));
$vendedor = new Vendedor();

$nomeVendedor = null;
$tel = null;
$rua = null;
$bairro = null;
$cidade = null;
$cep = null;
$estado = null;
$numero = null;
$complemento = null;
$rg = null;
$cpf = null;
$celular = null;

if ($opc != "Remover") {

    $nomeVendedor = addslashes(trim($_POST['nome']));
    $tel = addslashes(trim($_POST['tel']));
    $rua = addslashes(trim($_POST['rua']));
    $bairro = addslashes(trim($_POST['bairro']));
    $cidade = addslashes(trim($_POST['cidade']));
    $cep = addslashes(trim($_POST['cep']));
    $estado = addslashes(trim($_POST['estado']));
    $numero = addslashes(trim($_POST['numero']));
    $complemento = addslashes(trim($_POST['cmp']));
    $rg = addslashes(trim($_POST['rg']));
    $cpf = addslashes(trim($_POST['cpf']));
    $celular = addslashes(trim($_POST['celular']));
}



if ($opc == "Editar") {
    $cod = addslashes(trim($_GET['cod']));
    $vendedor = Vendedor::listaVendedor($cod);

    setaDados($vendedor, $nomeVendedor, $tel, $rua, $bairro, $cidade, $cep, $estado, $numero, $complemento, $rg, $cpf, $celular);

    Vendedor::EditaVendedor($vendedor);
    header("location:../controller/controllerVendedor.php");
} else {
    if ($opc == "Incluir") {
        $vendedor = new Vendedor();
        setaDados($vendedor, $nomeVendedor, $tel, $rua, $bairro, $cidade, $cep, $estado, $numero, $complemento, $rg, $cpf, $celular);
        Vendedor::insereVendedor($vendedor);
        header("location:../controller/controllerVendedor.php");
    } else {
        $cod = addslashes(trim($_GET['cod']));
        $escolha = addslashes(trim($_GET['escolha']));
        if ($escolha == "Sim") {
            Vendedor::deletaVendedor($cod);
            header("location:../controller/controllerVendedor.php");
        } else {
            header("location:../controller/controllerVendedor.php");
        }
    }
}

function setaDados($vendedor, $nomeVendedor, $tel, $rua, $bairro, $cidade, $cep, $estado, $numero, $complemento, $rg, $cpf, $celular) {
    $vendedor->setNome_vendedor($nomeVendedor);
    $vendedor->setTelefone($tel);
    $vendedor->setLogradouro($rua);
    $vendedor->setBairro($bairro);
    $vendedor->setCidade($cidade);
    $vendedor->setCep($cep);
    $vendedor->setEstado($estado);
    $vendedor->setNumero($numero);
    $vendedor->setComplemento($complemento);
    $vendedor->setRg($rg);
    $vendedor->setCpf($cpf);
    $vendedor->setCelular($celular);
}
