<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of foto
 *
 * @author Ricardo
 */
class foto {

    private $id_foto;
    private $referencia;

    function __construct($id_foto, $referencia) {
        $this->id_foto = $id_foto;
        $this->referencia = $referencia;
    }

    function getId_foto() {
        return $this->id_foto;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function setId_foto($id_foto) {
        $this->id_foto = $id_foto;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

}
