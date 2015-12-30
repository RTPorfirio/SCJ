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
    private $telefone;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $cep;
    private $estado;
    private $numero;
    private $complemento;

    function __construct($id_loja, $nome_loja) {
        $this->id_loja = $id_loja;
        $this->nome_loja = $nome_loja;
        $this->telefone = $telefone;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->estado = $estado;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }

    function getId_loja() {
        return $this->id_loja;
    }

    function getNome_loja() {
        return $this->nome_loja;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getEstado() {
        return $this->estado;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function setId_loja($id_loja) {
        $this->id_loja = $id_loja;
    }

    function setNome_loja($nome_loja) {
        $this->nome_loja = $nome_loja;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public static function listaLojas() {
        return LojaDao::listaLojas();
    }

    public static function listaLoja($id_loja) {
        return LojaDao::listaVendedor($id_loja);
    }

    public static function insereLoja($id_loja) {
        return LojaDao::insereLoja($id_loja);
    }

    public static function editaLoja($id_loja) {
        return LojaDao::editaLoja($id_loja);
    }

    public static function deletaLoja($id_loja) {
        return LojaDao::deletaLoja($id_loja);
    }

}
