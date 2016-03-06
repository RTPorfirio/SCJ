<?php

/**
 * Description of TransitaDao
 *
 * @author dazzini
 */

include_once '../model/Transita.php';

class TransitaDao {
    public static function ListaTransitas() {
        $arquivo = fopen('../estojo.txt', 'w+'); // responssãvel pela leitura do arquivo (Arquivo, Tamanho)
        if ($arquivo == false)
            die('Não foi possível abrir o arquivo.');
// imprime linha por linha ate detectar o final
        $array = array();
        while (!feof($arquivo)) {
            array_push($array, fgets($arquivo));
        }
        fclose($arquivo);
        return $array;
    }

    public static function InsereTransita($transita) {
        $fd = fopen('../estojo.txt', 'a'); // Abre o arquivo para Gravação, e se ele não existir será criado
        fwrite($fd, $transita."\n"); // Abre o Arquivo para leitura
        fclose($fd); // Fecha a variável
        return true;
    }

    public static function DeletaTransita() {
        unlink('../estojo.txt');
    }
}