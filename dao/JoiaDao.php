<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JoiaDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Joia.php';

class JoiaDao {

    public static function ListaJoias() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from joia");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $joia = null;
        foreach ($sm as $registros) {
            $joia = self::CreateJoia($registros);
            array_push($array, $joia);
        }
        return $array;
    }

    public static function ListaJoia($id_joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from joia where id_joia=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $joia = self::CreateJoia($sm);
        return $joia;
    }

    public static function InsereJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`joia` (`id_joia`, `preco_custo`, `preco_venda`, `consignado`, `quantidade`, `nota_fiscal`, `observacao`) VALUES (NULL,:preco_custo,:preco_venda,:consignado, :quantidade, :nota_fiscal, :observacao)");
        $insere->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $insere->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $insere->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $insere->bindValue(":quantidade", $joia->getQuantidade(), PDO::PARAM_STR);
        $insere->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $insere->bindValue(":observacao", $joia->getObservacao(), PDO::PARAM_STR);
        
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaJoia($id_joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`joia` WHERE `joia`.`id_joia` = :id");
        $del->bindValue(":id", $id_joia, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`joia` SET `preco_custo` = :preco_custo, `preco_venda` = :preco_venda, `consignado` = :consignado, `quantidade` = :quantidade, `nota_fiscal` = :nota_fiscal, `observacao` = :observacao WHERE `joia`.`id_joia` = :id;;");
        $edita->bindValue(":id", $joia->getId_joia(), PDO::PARAM_INT);
        $edita->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $edita->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $edita->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $edita->bindValue(":quantidade", $joia->getQuantidade(), PDO::PARAM_STR);
        $edita->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $edita->bindValue(":observacao", $joia->getObservacao(), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateJoia($sm) {
        $joia = new joia(
                $sm['id_joia']
                , $sm['preco_custo']
                , $sm['preco_venda']
                , $sm['consignado']
                , $sm['quantidade']
                , $sm['nota_fiscal']
                , $sm['observacao']);
        return $joia;
    }

}
