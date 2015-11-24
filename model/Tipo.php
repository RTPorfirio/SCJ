<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo
 *
 * @author Ricardo e Luiz
 */
class Tipo {
    private $id_tipo;
    private $nome_tipo;
    

    public function __construct($id_tipo, $nome_tipo) {
        $this->id_tipo = $id_tipo;
        $this->nome_tipo = $nome_tipo;
    }

    function getId_tipo() {
        return $this->id_tipo;
    }

    function getNome_tipo() {
        return $this->nome_tipo;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    function setNome_tipo($nome_tipo) {
        $this->nome_tipo = $nome_tipo;
    }



}
