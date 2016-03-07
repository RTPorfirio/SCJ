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
    private $id_transita;

    function __construct($nome_transita, $id_transita) {
        if (func_num_args() == 2) {
            $this->nome_transita = func_get_arg(1);
            $this->id_transita = func_get_arg(0);
        } else {
            $this->nome_transita = func_get_arg(0);
        }
    }

    function getNome_transita() {
        return $this->nome_transita;
    }

    function getId_transita() {
        return $this->id_transita;
    }

    function setNome_transita($nome_transita) {
        $this->nome_transita = $nome_transita;
    }

    function setId_transita($id_transita) {
        $this->id_transita = $id_transita;
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
