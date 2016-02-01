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
include '../dao/LojaDao.php';

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

    function __construct() {
        if (func_num_args() == 9) {
            $this->nome_loja = func_get_arg(0);
            $this->telefone = func_get_arg(1);
            $this->logradouro = func_get_arg(2);
            $this->bairro = func_get_arg(3);
            $this->cidade = func_get_arg(4);
            $this->cep =  func_get_arg(5);
            $this->estado = func_get_arg(6);
            $this->numero = func_get_arg(7);
            $this->complemento = func_get_arg(8);
        } else {
            if (func_num_args() == 10) {
            $this->id_loja = func_get_arg(0);
            $this->nome_loja = func_get_arg(1);
            $this->telefone = func_get_arg(2);
            $this->logradouro = func_get_arg(3);
            $this->bairro = func_get_arg(4);
            $this->cidade = func_get_arg(5);
            $this->cep =  func_get_arg(6);
            $this->estado = func_get_arg(7);
            $this->numero = func_get_arg(8);
            $this->complemento = func_get_arg(9);
            }
        }
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
        return LojaDao::ListaLoja($id_loja);
    }

    public static function insereLoja($loja) {
        return LojaDao::insereLoja($loja);
    }

    public static function editaLoja($id_loja) {
        return LojaDao::editaLoja($id_loja);
    }

    public static function deletaLoja($id_loja) {
        return LojaDao::deletaLoja($id_loja);
    }

}
