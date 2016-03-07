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
        $busca->bindValue(":id", $id_joia, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $joia = self::CreateJoia($sm);
        return $joia;
    }

    public static function listaJoiaQR($qrCode, $teste) {

        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->query("SELECT * FROM `joias` WHERE `qr_code` = '$qrCode'");
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $joia = self::CreateJoia($sm);
        return $joia;
    }

    public static function SelecionaUltimoId() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("SELECT MAX(id_joia) from joias");
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        return $sm;
    }

    public static function InsereJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `joias` (`preco_custo`, `preco_venda`, `consignado`, `nota_fiscal`, `obs`, `cod_base`, `qr_code`, `tamanho`, `imagem`,`id_tipo`,`id_loja`,`id_cor`,`id_pedra`,`valida`) VALUES (:preco_custo, :preco_venda, :consignado,  :nota_fiscal, :obs, :cod_base, :qr_code,:tamanho, :imagem,:tipo,:loja,:cor,:pedra,:valida)");
        $insere->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $insere->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $insere->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $insere->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $insere->bindValue(":obs", $joia->getObservacao(), PDO::PARAM_STR);
        $insere->bindValue(":cod_base", $joia->getcodBase(), PDO::PARAM_STR);
        $insere->bindValue(":qr_code", $joia->getQr_code(), PDO::PARAM_STR);
        $insere->bindValue(":tamanho", $joia->getTamanho(), PDO::PARAM_INT);
        $insere->bindValue(":imagem", $joia->getImagem(), PDO::PARAM_STR);
        $insere->bindValue(":tipo", $joia->getTipo(), PDO::PARAM_STR);
        $insere->bindValue(":loja", $joia->getLoja(), PDO::PARAM_STR);
        $insere->bindValue(":cor", $joia->getCor(), PDO::PARAM_INT);
        $insere->bindValue(":pedra", $joia->getPedra(), PDO::PARAM_STR);
        $insere->bindValue(":valida", 1, PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function editaValida($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `joias` SET "
                . "`valida` = :valida "
                . "WHERE `id_joia` = :id;");

        $edita->bindValue(":id", $joia->getId_joia(), PDO::PARAM_INT);
        $edita->bindValue(":valida", $joia->getValida(), PDO::PARAM_INT);
        $edita->execute();
    }

    public static function DeletaJoia($id_joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `joias` WHERE `joias`.`id_joia` = :id");

        $del->bindValue(":id", $id_joia, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaJoia($joia) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `joias` SET "
                . "`preco_custo` = :preco_custo, "
                . "`preco_venda` = :preco_venda, "
                . "`consignado` = :consignado, "
                . "`nota_fiscal` = :nota_fiscal, "
                . "`obs` = :obs, "
                . "`cod_base` = :cod_base, "
                . "`qr_code` = :qr_code, "
                . "`tamanho` = :tamanho, "
                . "`imagem` = :img, "
                . "`id_tipo` = :tipo, "
                . "`id_loja` = :loja, "
                . "`id_cor` = :cor, "
                . "`id_pedra` = :pedra, "
                . "`valida` = :valida "
                . "WHERE `id_joia` = :id;");

        $edita->bindValue(":id", $joia->getId_joia(), PDO::PARAM_INT);
        $edita->bindValue(":preco_custo", $joia->getPreco_custo(), PDO::PARAM_STR);
        $edita->bindValue(":preco_venda", $joia->getPreco_venda(), PDO::PARAM_STR);
        $edita->bindValue(":consignado", $joia->getConsignado(), PDO::PARAM_STR);
        $edita->bindValue(":nota_fiscal", $joia->getNota_fiscal(), PDO::PARAM_STR);
        $edita->bindValue(":obs", $joia->getObservacao(), PDO::PARAM_STR);
        $edita->bindValue(":cod_base", $joia->getcodBase(), PDO::PARAM_STR);
        $edita->bindValue(":qr_code", $joia->getQr_code(), PDO::PARAM_STR);
        $edita->bindValue(":tamanho", $joia->getTamanho(), PDO::PARAM_INT);
        $edita->bindValue(":imagem", $joia->getImagem(), PDO::PARAM_STR);
        $edita->bindValue(":tipo", $joia->getTipo(), PDO::PARAM_INT);
        $edita->bindValue(":loja", $joia->getLoja(), PDO::PARAM_INT);
        $edita->bindValue(":cor", $joia->getCor(), PDO::PARAM_INT);
        $edita->bindValue(":pedra", $joia->getPedra(), PDO::PARAM_INT);
        $edita->bindValue(":valida", $joia->getValida(), PDO::PARAM_INT);
        $edita->execute();
    }

    private function CreateJoia($sm) {
        $joia = new joia(
                $sm['id_joia'] // 0
                , $sm['preco_custo'] // 1
                , $sm['preco_venda'] // 2
                , $sm['consignado'] // 3
                , $sm['nota_fiscal'] // 4
                , $sm['obs'] // 5
                , $sm['cod_base'] // 6
                , $sm['qr_code'] // 7
                , $sm['tamanho'] // 8
                , $sm['imagem'] // 9
                , $sm['id_tipo'] // 10
                , $sm['id_loja'] // 11
                , $sm['id_cor'] // 12
                , $sm['id_pedra']
                , $sm['valida']); // 13
        return $joia;
    }

}
