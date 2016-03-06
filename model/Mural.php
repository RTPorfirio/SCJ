<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mural
 *
 * @author Ricardo
 */

include_once '../dao/MuralDao.php';
class Mural {

    private $id_mural;
    private $texto;

    function __construct() {
        if (func_num_args() == 1) {
            $this->texto = func_get_arg(0);
        } else {
            if (func_num_args() == 2) {
                $this->id_mural = func_get_arg(0);
                $this->texto = func_get_arg(1);
            }
        }
    }

    function getId_mural() {
        return $this->id_mural;
    }

    function getTexto() {
        return $this->texto;
    }

    function setId_mural($id_mural) {
        $this->id_mural = $id_mural;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }
    public static function listaMurais() {
        return MuralDao::ListaMurais();
    }

    public static function listaMural($mural) {
        return MuralDao::listaMural($mural);
    }

    public static function insereMural($mural) {
        return MuralDao::insereMural($mural);
    }

    public static function editaMural($mural) {
        return MuralDao::editaMural($mural);
    }

    public static function deletaMural($mural) {
        return MuralDao::deletaMural($mural);
    }
}
