<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Tipo.php';

class TipoDao {

    public static function ListaTipos() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from tipo");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $tipo = null;
        foreach ($sm as $registros) {
            $tipo = self::CreateTipo($registros);
            array_push($array, $tipo);
        }
        return $array;
    }

    public static function ListaTipo($id_tipo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from tipo where id_tipo=:id");
        $busca->bindValue(":id", $id_tipo, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $tipo = self::CreateTipo($sm);
        return $tipo;
    }

    public static function InsereTipo($tipo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`tipo` (`id_tipo`, `nome_tipo`) VALUES (NULL,:nome)");
        $insere->bindValue(":nome", $tipo->getNome_tipo(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaTipo($id_tipo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`tipo` WHERE `tipo`.`id_tipo` = :id");
        $del->bindValue(":id", $id_tipo, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaTipo($tipo) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`tipo` SET `nome_tipo` = :nome WHERE `tipo`.`id_tipo` = :id;;");
        $edita->bindValue(":id", $tipo->getId_tipo(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $tipo->getNome_tipo(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateTipo($sm) {
        $tipo = new Tipo(
                $sm['id_tipo']
                , $sm['nome_tipo']);
        return $tipo;
    }

}
