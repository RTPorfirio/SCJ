<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FotoDao
 *
 * @author dazzini
 */
include_once 'ConnectBD.php';
include_once '../model/Foto.php';

class FotoDao {

    public static function ListaFotos() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from foto");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $foto = null;
        foreach ($sm as $registros) {
            $foto = self::CreateFoto($registros);
            array_push($array, $foto);
        }
        return $array;
    }

    public static function ListaFoto($id_foto) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from foto where id_foto=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $foto = self::CreateFoto($sm);
        return $foto;
    }

    public static function InsereFoto($foto) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`foto` (`id_foto`, `referencia`) VALUES (NULL,:referencia)");
        $insere->bindValue(":referencia", $foto->getReferencia(), PDO::PARAM_STR);

        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaFoto($id_foto) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`foto` WHERE `foto`.`id_foto` = :id");
        $del->bindValue(":id", $id, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaFoto($foto) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`foto` SET `referencia` = :referencia WHERE `vendedor`.`id_foto` = :id;;");
        $edita->bindValue(":id", $foto->getId_foto(), PDO::PARAM_INT);
        $edita->bindValue(":referencia", $referencia->getReferencia(), PDO::PARAM_STR);

        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateFoto($sm) {
        $foto = new Foto(
                $sm['id_foto']
                , $sm['referencia']);
        return $foto;
    }

}
