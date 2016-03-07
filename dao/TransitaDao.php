<?php

/**
 * Description of TransitaDao
 *
 * @author dazzini
 */
include_once '../model/Transita.php';

class TransitaDao {

    public static function ListaTransitas() {

        if (@!$arquivo = fopen('../estojo.txt', 'r')) {
            @$arquivo = fopen('../estojo.txt', 'w+'); // responssãvel pela leitura do arquivo (Arquivo, Tamanho)
        }
// imprime linha por linha ate detectar o final
        $array = array();

        while (!feof($arquivo)) {


            array_push($array, $arquivo);
        }
        fclose($arquivo);
        return $array;
    }

    public static function InsereTransita($transita) {
        $fd = fopen('../estojo.txt', 'a'); // Abre o arquivo para Gravação, e se ele não existir será criado
        fwrite($fd, $transita . "*"); // Abre o Arquivo para leitura
        fclose($fd); // Fecha a variável
    }

    public static function DeletaTransita() {
        unlink('../estojo.txt');
    }

}
