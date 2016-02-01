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

include '../dao/TipoDao.php';

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

    public static function listaTipos() {
        return TipoDao::listaTipos();
    }

    public static function listaTipo($id_tipo) {
        return TipoDao::listaTipo($id_tipo);
    }

    public static function insereTipo($id_tipo) {
        return TipoDao::insereTipo($id_tipo);
    }

    public static function editaTipo($id_tipo) {
        return TipoDao::editaTipo($id_tipo);
    }

    public static function deletaTipo($id_tipo) {
        return TipoDao::deletaTipo($id_tipo);
    }

}
