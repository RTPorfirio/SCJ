<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedraDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Pedra.php';

class PedraDao {

    public static function ListaPedras() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from pedra");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $pedra = null;
        foreach ($sm as $registros) {
            $pedra = self::CreatePedra($registros);
            array_push($array, $pedra);
        }
        return $array;
    }

    public static function ListaPedra($id_Pedra) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from pedra where id_pedra=:id_Pedra");
        $busca->bindValue(":id_Pedra", $id_Pedra, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $pedra = self::CreatePedra($sm);
        return $pedra;
    }

    public static function InserePedra($pedra) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`pedra` (`nome_pedra`) VALUES (:nome)");
        $insere->bindValue(":nome", $pedra->getNome_Pedra(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaPedra($id_pedra) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`pedra` WHERE `pedra`.`id_pedra` = :id");
        $del->bindValue(":id", $id_pedra, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaPedra($pedra) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`pedra` SET `nome_pedra` = :nome WHERE `pedra`.`id_pedra` = :id;");
        $edita->bindValue(":id", $pedra->getId_pedra(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $pedra->getNome_pedra(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreatePedra($sm) {
        $pedra = new Pedra(
                $sm['id_pedra']
                , $sm['nome_pedra']);
        return $pedra;
    }

}
