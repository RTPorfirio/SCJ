<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loja
 *
 * @author Ricardo
 */
class Loja {

    private $id_loja;
    private $nome_loja;

    function __construct($id_loja, $nome_loja) {
        $this->id_loja = $id_loja;
        $this->nome_loja = $nome_loja;
    }

    function getId_loja() {
        return $this->id_loja;
    }

    function getNome_loja() {
        return $this->nome_loja;
    }

    function setId_loja($id_loja) {
        $this->id_loja = $id_loja;
    }

    function setNome_loja($nome_loja) {
        $this->nome_loja = $nome_loja;
    }

}
