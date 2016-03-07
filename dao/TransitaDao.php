<?php

/**
 * Description of TransitaDao
 *
 * @author dazzini
 */
include_once '../model/Transita.php';

class TransitaDao {

    public static function ListaTransitas() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("SELECT * FROM `transita`");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        foreach ($sm as $registros) {
            $transita = self::CreateTransita($registros);
            array_push($array, $transita);
        }

        return $array;
    }

    public static function insereTransita($transita) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`transita` (`nome`) VALUES (:nome)");
        $insere->bindValue(":nome", $transita, PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaTransita() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $deleta = $conn->prepare("truncate transita");
        $deleta->execute();
    }

    private function CreateTransita($sm) {
        $t = new Transita(
                $sm['id_transita']
                , $sm['nome']);
        return $t;
    }

}
