<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vendedor
 *
 * @author Ricardo
 */
class Vendedor {

    private $id_vendedor;
    private $nome_vendedor;
    private $rg;
    private $cpf;
    private $telefone;
    private $celular;

    function __construct($id_vendedor, $nome_vendedor, $rg, $cpf, $telefone, $celular) {
        $this->id_vendedor = $id_vendedor;
        $this->nome_vendedor = $nome_vendedor;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->celular = $celular;
    }

    function getId_vendedor() {
        return $this->id_vendedor;
    }

    function getNome_vendedor() {
        return $this->nome_vendedor;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function setId_vendedor($id_vendedor) {
        $this->id_vendedor = $id_vendedor;
    }

    function setNome_vendedor($nome_vendedor) {
        $this->nome_vendedor = $nome_vendedor;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

}
