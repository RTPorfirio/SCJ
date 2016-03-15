<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MuralDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Mural.php';

class MuralDao {

    public static function ListaMurais() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from mural");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $mural = null;
        foreach ($sm as $registros) {
            $mural = self::CreateMural($registros);
            array_push($array, $mural);
        }
        return $array;
    }

    public static function ListaMural($id_Mural) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from mural where id_mural=:id_mural");
        $busca->bindValue(":id_mural", $id_Mural, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $mural = self::CreateMural($sm);
        return $mural;
    }

    public static function InsereMural($mural) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`mural` (`id_mural`,`nome_mural`) VALUES (1,:nome)");
        $insere->bindValue(":nome", $mural->getTexto(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaMural($id_mural) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`mural` WHERE `mural`.`id_mural` = :id");
        $del->bindValue(":id", $id_mural, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaMural($mural) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`mural` SET `nome_mural` = :nome WHERE `mural`.`id_mural` = :id;");
        $edita->bindValue(":id", $mural->getId_mural(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $mural->getTexto(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateMural($sm) {
        $mural = new Mural(
                $sm['id_mural']
                , $sm['nome_mural']);
        return $mural;
    }

}
