<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LojaDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Loja.php';

class LojaDao {

    public static function ListaLojas() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from loja");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $loja = null;
        foreach ($sm as $registros) {
            $loja = self::CreateLoja($registros);
            array_push($array, $loja);
        }
        return $array;
    }

    public static function ListaLoja($id_loja) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from loja where id_loja=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $loja = self::CreateLoja($sm);
        return $loja;
    }

    public static function InsereLoja($loja) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`loja` (`id_loja`, `nome_loja`, `telefone`, `logradouro`, `bairro`, `cidade`, `cep`, `estado`, `numero`, `complemento`) VALUES (NULL,:nome,:telefone,:logradouro,:bairro,:cidade,:cep,:estado,:numero,:complemento)");
        $insere->bindValue(":nome", $loja->getNome_loja(), PDO::PARAM_STR);
        $insere->bindValue(":telefone", $loja->getTelefone(), PDO::PARAM_STR);
        $insere->bindValue(":logradouro", $loja->getLogradouro(), PDO::PARAM_STR);
        $insere->bindValue(":bairro", $loja->getBairro(), PDO::PARAM_STR);
        $insere->bindValue(":cidade", $loja->getCidade(), PDO::PARAM_STR);
        $insere->bindValue(":cep", $loja->getCep(), PDO::PARAM_STR);
        $insere->bindValue(":estado", $loja->getEstado(), PDO::PARAM_STR);
        $insere->bindValue(":numero", $loja->getNumero(), PDO::PARAM_STR);
        $insere->bindValue(":complemento", $loja->getComplemento(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaLoja($id_loja) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`loja` WHERE `loja`.`id_loja` = :id");
        $del->bindValue(":id", $id, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaLoja($loja) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`loja` SET `nome_loja` = :nome, `telefone` = :telefone, `logradouro` = :logradouro, `bairro` = :bairro, `cidade` = :cidade, `cep` = :cep, `estado` = :estado, `numero` = :numero, `complemento` = :complemento WHERE `loja`.`id_loja` = :id;;");
        $edita->bindValue(":id", $loja->getId_loja(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $loja->getNome_loja(), PDO::PARAM_STR);
        $edita->bindValue(":telefone", $loja->getTelefone(), PDO::PARAM_STR);
        $edita->bindValue(":logradouro", $loja->getLogradouro(), PDO::PARAM_STR);
        $edita->bindValue(":bairro", $loja->getBairro(), PDO::PARAM_STR);
        $edita->bindValue(":cidade", $loja->getCidade(), PDO::PARAM_STR);
        $edita->bindValue(":cep", $loja->getCep(), PDO::PARAM_STR);
        $edita->bindValue(":estado", $loja->getEstado(), PDO::PARAM_STR);
        $edita->bindValue(":numero", $loja->getNumero(), PDO::PARAM_STR);
        $edita->bindValue(":complemento", $loja->getComplemento(), PDO::PARAM_STR);
        
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateLoja($sm) {
        $loja = new loja(
                $sm['id_loja']
                , $sm['nome_loja']
                , $sm['telefone']
                , $sm['logradouro']
                , $sm['bairro']
                , $sm['cidade']
                , $sm['cep']
                , $sm['estado']
                , $sm['numero']
                , $sm['complemento']);
        return $loja;
    }

}
