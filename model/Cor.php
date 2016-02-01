<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cor
 *
 * @author Ricardo
 */

include '../dao/CorDao.php';

class Cor {
    private $id_cor;
    private $nome_cor;
    
    function __construct($id_cor, $nome_cor) {
        $this->id_cor = $id_cor;
        $this->nome_cor = $nome_cor;
    }

    function getId_cor() {
        return $this->id_cor;
    }

    function getNome_cor() {
        return $this->nome_cor;
    }

    function setId_cor($id_cor) {
        $this->id_cor = $id_cor;
    }

    function setNome_cor($nome_cor) {
        $this->nome_cor = $nome_cor;
    }

    public static function listaCores() {
        return CorDao::listaCores();
    }

    public static function listaCor($cor) {
        return CorDao::listaCor($cor);
    }

    public static function insereCor($cor) {
        return CorDao::insereCor($cor);
    }

    public static function editaCor($cor) {
        return CorDao::editaCor($cor);
    }

    public static function deletaCor($cor) {
        return CorDao::deletaCor($cor);
    }
    
}
