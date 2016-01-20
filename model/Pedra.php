<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedra
 *
 * @author Ricardo
 */
class Pedra {

    private $id_pedra;
    private $nome_pedra;

    function __construct($id_pedra, $nome_pedra) {
        $this->id_pedra = $id_pedra;
        $this->nome_pedra = $nome_pedra;
    }

    function getId_pedra() {
        return $this->id_pedra;
    }

    function getNome_pedra() {
        return $this->nome_pedra;
    }

    function setId_pedra($id_pedra) {
        $this->id_pedra = $id_pedra;
    }

    function setNome_pedra($nome_pedra) {
        $this->nome_pedra = $nome_pedra;
    }

    public static function listaPedras() {
        return PedraDao::listaPedras();
    }

    public static function listaPedra($id_pedra) {
        return PedraDao::listaPedra($id_pedra);
    }

    public static function inserePedra($id_pedra) {
        return PedraDao::inserePedra($id_pedra);
    }

    public static function editaPedra($id_pedra) {
        return PedraDao::editaPedra($id_pedra);
    }

    public static function deletaPedra($id_pedra) {
        return PedraDao::deletaPedra($id_pedra);
    }

}
