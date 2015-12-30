<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TamanhoDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Tamanho.php';

class TamanhoDao {

    public static function ListaTamanhos() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from tamanho");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $tamanho = null;
        foreach ($sm as $registros) {
            $tamanho = self::CreateTamanho($registros);
            array_push($array, $tamanho);
        }
        return $array;
    }

    public static function ListaTamanho($id_tamanho) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from tamanho where id_tamanho=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $tamanho = self::CreateTamanho($sm);
        return $tamanho;
    }

    public static function InsereTamanho($tamanho) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`tamanho` (`id_tamanho`, `nome_tamanho`) VALUES (NULL,:nome)");
        $insere->bindValue(":nome", $tamanho->getNome_tamanho(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaTamanho($id_tamanho) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`tamanho` WHERE `tamanho`.`id_tamanho` = :id");
        $del->bindValue(":id", $id, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaTamanho($tamanho) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`tamanho` SET `nome_tamanho` = :nome WHERE `vendedor`.`id_tamanho` = :id;;");
        $edita->bindValue(":id", $tamanho->getId_tamanho(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $tamanho->getNome_tamanho(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateTamanho($sm) {
        $tamanho = new Tamanho(
                $sm['id_tamanho']
                , $sm['nome_tamanho']);
        return $tamanho;
    }

}
