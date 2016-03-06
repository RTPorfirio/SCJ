<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transita
 *
 * @author Ricardo
 */
include '../dao/TransitaDao.php';

class Transita {

    private $nome_transita;
    function __construct($nome_transita) {
        $this->nome_transita = $nome_transita;
    }

        function getNome() {
        return $this->nome_transita;
    }

    function setNome_transita($nome_transita) {
        $this->nome_transita = $nome_transita;
    }

    public static function listaTransitas() {
        return TransitaDao::listaTransitas();
    }

    public static function insereTransita($transita) {
        return TransitaDao::insereTransita($transita);
    }

    public static function deletaTransita() {
        return TransitaDao::deletaTransita();
    }

}
