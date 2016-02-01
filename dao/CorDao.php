<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CorDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Cor.php';

class CorDao {

    public static function ListaCores() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from cor");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $cor = null;
        foreach ($sm as $registros) {
            $cor = self::CreateCor($registros);
            array_push($array, $cor);
        }
        return $array;
    }

    public static function ListaCor($id_Cor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from cor where id_cor=:id_Cor");
        $busca->bindValue(":id_Cor", $id_Cor, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $cor = self::CreateCor($sm);
        return $cor;
    }

    public static function InsereCor($cor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`cor` (`nome_cor`) VALUES (:nome)");
        $insere->bindValue(":nome", $cor->getNome_Cor(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaCor($id_cor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`cor` WHERE `cor`.`id_cor` = :id");
        $del->bindValue(":id", $id_cor, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaCor($cor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`cor` SET `nome_cor` = :nome WHERE `cor`.`id_cor` = :id;");
        $edita->bindValue(":id", $cor->getId_cor(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $cor->getNome_cor(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateCor($sm) {
        $cor = new Cor(
                $sm['id_cor']
                , $sm['nome_cor']);
        return $cor;
    }

}
