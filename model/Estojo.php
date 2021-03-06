<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estojo
 *
 * @author Ricardo
 */
class Estojo {

    private $id_estojo;
    private $vendedor_id_vendedor;

    function __construct($id_estojo, $vendedor_id_vendedor) {
        $this->id_estojo = $id_estojo;
        $this->vendedor_id_vendedor = $vendedor_id_vendedor;
    }

    function getId_estojo() {
        return $this->id_estojo;
    }

    function getVendedor_id_vendedor() {
        return $this->vendedor_id_vendedor;
    }

    function setId_estojo($id_estojo) {
        $this->id_estojo = $id_estojo;
    }

    function setVendedor_id_vendedor($vendedor_id_vendedor) {
        $this->vendedor_id_vendedor = $vendedor_id_vendedor;
    }

    public static function listaEstojos() {
        return EstojoDao::listaEstojos();
    }

    public static function listaEstojo($id_estojo) {
        return EstojoDao::listaEstojo($id_estojo);
    }

    public static function insereEstojo($id_estojo) {
        return EstojoDao::insereVendedor($id_estojo);
    }

    public static function editaEstojo($id_estojo) {
        return EstojoDao::editaVendedor($id_estojo);
    }

    public static function deletaEstojo($id_estojo) {
        return EstojoDao::deletaVendedor($id_estojo);
    }

}
