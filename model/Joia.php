<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Joia
 *
 * @author Ricardo
 */
class Joia {

    private $id_joia;
    private $preco_custo;
    private $preco_venda;
    private $consignado;
    private $quantidade;
    private $nota_fiscal;
    private $observacao;

    function __construct($id_joia, $preco_custo, $preco_venda, $consignado, $quantidade, $nota_fiscal, $observacao) {
        $this->id_joia;
        $this->preco_custo;
        $this->preco_venda;
        $this->consignado;
        $this->quantidade;
        $this->nota_fiscal;
        $this->observacao;
    }

    function getId_joia() {
        return $this->id_joia;
    }

    function getPreco_custo() {
        return $this->preco_custo;
    }

    function getPreco_venda() {
        return $this->preco_venda;
    }

    function getConsignado() {
        return $this->consignado;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getNota_fiscal() {
        return $this->nota_fiscal;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setId_joia($id_joia) {
        $this->id_joia = $id_joia;
    }

    function setPreco_custo($preco_custo) {
        $this->preco_custo = $preco_custo;
    }

    function setPreco_venda($preco_venda) {
        $this->preco_venda = $preco_venda;
    }

    function setConsignado($consignado) {
        $this->consignado = $consignado;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setNota_fiscal($nota_fiscal) {
        $this->nota_fiscal = $nota_fiscal;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    public static function listaJoias() {
        return JoiaDao::listaJoias();
    }

    public static function listaJoia($id_vendedor) {
        return JoiaDao::listaJoia($id_vendedor);
    }

    public static function insereJoia($id_vendedor) {
        return JoiaDao::insereJoia($id_vendedor);
    }

    public static function editaJoia($id_vendedor) {
        return JoiaDao::editaJoia($id_vendedor);
    }

    public static function deletaJoia($id_vendedor) {
        return JoiaDao::deletaJoia($id_vendedor);
    }

}
