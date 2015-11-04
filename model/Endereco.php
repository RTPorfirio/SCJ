<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endereco
 *
 * @author Ricardo
 */
class Endereco {
    private $id_endereco;
    private $logradouro;
    private $numero;
    private $complemento;
    private $cep;
    private $complemento_id_vendedor;
    
    
    function __construct($id_endereco, $logradouro, $numero, $complemento, $cep, $complemento_id_vendedor) {
        $this->id_endereco = $id_endereco;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->complemento_id_vendedor = $complemento_id_vendedor;
    }

    function getId_endereco() {
        return $this->id_endereco;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getCep() {
        return $this->cep;
    }

    function getComplemento_id_vendedor() {
        return $this->complemento_id_vendedor;
    }

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setComplemento_id_vendedor($complemento_id_vendedor) {
        $this->complemento_id_vendedor = $complemento_id_vendedor;
    }


}
