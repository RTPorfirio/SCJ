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
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    function __construct($id_vendedor, $nome_vendedor, $rg, $cpf, $telefone, $celular, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $cep) {
        $this->id_vendedor = $id_vendedor;
        $this->nome_vendedor = $nome_vendedor;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
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

    function getLogradouro() {
        return $this->logradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCep() {
        return $this->cep;
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

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    public static function listaVendedores() {
        return VendedorDao::listaVendedores();
    }

    public static function listaVendedor($id_vendedor) {
        return VendedorDao::listaVendedor($id_vendedor);
    }

    public static function insereVendedor($id_vendedor) {
        return VendedorDao::insereVendedor($id_vendedor);
    }

    public static function editaVendedor($id_vendedor) {
        return VendedorDao::editaVendedor($id_vendedor);
    }

    public static function deletaVendedor($id_vendedor) {
        return VendedorDao::deletaVendedor($id_vendedor);
    }

}
