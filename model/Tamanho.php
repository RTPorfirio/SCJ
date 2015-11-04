<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tamanho
 *
 * @author Ricardo
 */
class Tamanho {

    private $id_tamanho;
    private $nome_tamanho;

    function __construct($id_tamanho, $nome_tamanho) {
        $this->id_tamanho = $id_tamanho;
        $this->nome_tamanho = $nome_tamanho;
    }

    function getId_tamanho() {
        return $this->id_tamanho;
    }

    function getNome_tamanho() {
        return $this->nome_tamanho;
    }

    function setId_tamanho($id_tamanho) {
        $this->id_tamanho = $id_tamanho;
    }

    function setNome_tamanho($nome_tamanho) {
        $this->nome_tamanho = $nome_tamanho;
    }

}
