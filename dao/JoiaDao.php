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
        $busca = $conn->prepare("select * from joias");
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
        $busca = $conn->prepare("select * from joias where id_joia=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $joia = self::CreateJoia($sm);
        return $joia;
    }

    public static function InsereJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `joias` (`preco_custo`, `preco_venda`, `consignado`, `quantidade`, `nota_fiscal`, `obs`, `qr_code`, `loja_id_loja`, `cor_id_cor`, `tipo_id_tipo`, `pedra_id_pedra`, `tamanho`, `imagem`) VALUES (:preco_custo, :preco_venda, :consignado, :qnt, :nota_fiscal, :obs, :qr_code, :loja_id_loja, :cor_id_cor, :tipo_id_tipo, :pedra_id_pedra, :tamanho, :imagem)");
        $insere->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $insere->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $insere->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $insere->bindValue(":quantidade", $joia->getQuantidade(), PDO::PARAM_STR);
        $insere->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $insere->bindValue(":obs", $joia->getObservacao(), PDO::PARAM_STR);
        $insere->bindValue(":qr_code", $joia->getQr_code(), PDO::PARAM_STR);
        $insere->bindValue(":loja_id_loja", $joia->getLoja_id_loja(), PDO::PARAM_STR);
        $insere->bindValue(":cor_id_cor", $joia->getCor_id_cor(), PDO::PARAM_STR);
        $insere->bindValue(":tipo_id_tipo", $joia->getTipo_id_tipo(), PDO::PARAM_STR);
        $insere->bindValue(":pedra_id_pedra", $joia->getPedra_id_pedra(), PDO::PARAM_STR);
        $insere->bindValue(":tamanho", $joia->getTamanho(), PDO::PARAM_STR);
        $insere->bindValue(":imagem", $joia->getImagem(), PDO::PARAM_STR);


        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaJoia($id_joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`joias` WHERE `joia`.`id_joia` = :id");
        $del->bindValue(":id", $id_joia, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("INSERT INTO `joias` (`id_joia`, `preco_custo`, `preco_venda`, `consignado`, `quantidade`, `nota_fiscal`, `obs`, `qr_code`, `loja_id_loja`, `cor_id_cor`, `tipo_id_tipo`, `pedra_id_pedra`, `tamanho`, `imagem`) VALUES(:id_joia, :preco_custo, :preco_venda, :consignado, :qnt, :nota_fiscal, :obs, :qr_code, :loja_id_loja, :cor_id_cor, :tipo_id_tipo, :pedra_id_pedra, :tamanho, :imagem)");
        $edita->bindValue(":id_joia", $joia->getId_joia(), PDO::PARAM_INT);
        $edita->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $edita->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $edita->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $edita->bindValue(":quantidade", $joia->getQuantidade(), PDO::PARAM_STR);
        $edita->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $edita->bindValue(":obs", $joia->getObservacao(), PDO::PARAM_STR);
        $edita->bindValue(":qr_code", $joia->getQr_code(), PDO::PARAM_STR);
        $edita->bindValue(":loja_id_loja", $joia->getLoja_id_loja(), PDO::PARAM_STR);
        $edita->bindValue(":cor_id_cor", $joia->getCor_id_cor(), PDO::PARAM_STR);
        $edita->bindValue(":tipo_id_tipo", $joia->getTipo_id_tipo(), PDO::PARAM_STR);
        $edita->bindValue(":pedra_id_pedra", $joia->getPedra_id_pedra(), PDO::PARAM_STR);
        $edita->bindValue(":tamanho", $joia->getTamanho(), PDO::PARAM_STR);
        $edita->bindValue(":imagem", $joia->getImagem(), PDO::PARAM_STR);
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
                , $sm['obs']
                , $sm['qr_code']
                , $sm['loja_id_loja']
                , $sm['cor_id_cor']
                , $sm['tipo_id_tipo']
                , $sm['pedra_id_pedra']
                , $sm['tamanho']
                , $sm['imagem']);
        return $joia;
    }

}
