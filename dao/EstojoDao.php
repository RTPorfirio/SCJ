<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstojoDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Estojo.php';

class EstojoDao {

    public static function ListaEstojos() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from estojo");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $estojo = null;
        foreach ($sm as $registros) {
            $estojo = self::CreateUser($registros);
            array_push($array, $estojo);
        }
        return $array;
    }

    public static function ListaEstojo($id_estojo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from estojo where id_estojo=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $estojo = self::CreateEstojo($sm);
        return $estojo;
    }

    public static function InsereEstojo($estojo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`estojo` (`id_estojo`, `nome_vendedor`, `rg`, `cpf`, `telefone`, `celular`) VALUES (NULL,:nome,:rg,:cpf, :telefone, :celular)");
        $insere->bindValue(":nome", $vendedor->getNome_vendedor(), PDO::PARAM_STR);
        $insere->bindValue(":rg", $vendedor->getRg(), PDO::PARAM_STR);
        $insere->bindValue(":cpf", $vendedor->getCpf(), PDO::PARAM_STR);
        $insere->bindValue(":telefone", $vendedor->getTelefone(), PDO::PARAM_STR);
        $insere->bindValue(":celular", $vendedor->getCelular(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaVendedor($vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`vendedor` WHERE `vendedor`.`id_vendedor` = :id");
        $del->bindValue(":id", $id, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaVendedor($vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`vendedor` SET `nome_vendedor` = :nome, `rg` = :rg, `cpf` = :cpf, `telefone` = :telefone, `celular` = :celular WHERE `vendedor`.`id_vendedor` = :id;;");
        $edita->bindValue(":id", $vendedor->getId_vendedor(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $vendedor->getNome_vendedor(), PDO::PARAM_STR);
        $edita->bindValue(":rg", $vendedor->getRg(), PDO::PARAM_STR);
        $edita->bindValue(":cpf", $vendedor->getCpf(), PDO::PARAM_STR);
        $edita->bindValue(":telefone", $vendedor->getTelefone(), PDO::PARAM_STR);
        $edita->bindValue(":celular", $vendedor->getCelular(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateVendedor($sm) {
        $vendedor = new Vendedor(
                $sm['id_vendedor']
                , $sm['nome_vendedor']
                , $sm['rg']
                , $sm['cpf']
                , $sm['telefone']
                , $sm['celular']);
        return $vendedor;
    }

}
