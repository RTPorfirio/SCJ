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

include '../dao/JoiaDao.php';

class Joia {

    private $id_joia;
    private $preco_custo;
    private $preco_venda;
    private $consignado;
    private $quantidade;
    private $nota_fiscal;
    private $observacao;
    private $qr_code;
    private $loja_id_loja;
    private $cor_id_cor;
    private $tipo_id_tipo;
    private $pedra_id_pedra;
    private $tamanho;
    private $imagem;

    function __construct() {
        if (func_num_args() == 14) {
            $this->id_joia = func_get_arg(0);
            $this->preco_custo = func_get_arg(1);
            $this->preco_venda = func_get_arg(2);
            $this->consignado = func_get_arg(3);
            $this->quantidade = func_get_arg(4);
            $this->nota_fiscal = func_get_arg(5);
            $this->observacao = func_get_arg(6);
            $this->qr_code = func_get_arg(7);
            $this->loja_id_loja = func_get_arg(8);
            $this->cor_id_cor = func_get_arg(9);
            $this->tipo_id_tipo = func_get_arg(10);
            $this->pedra_id_pedra = func_get_arg(11);
            $this->tamanho = func_get_arg(12);
            $this->imagem = func_get_arg(13);
        } else {
            $this->preco_custo = func_get_arg(0);
            $this->preco_venda = func_get_arg(1);
            $this->consignado = func_get_arg(2);
            $this->quantidade = func_get_arg(3);
            $this->nota_fiscal = func_get_arg(4);
            $this->observacao = func_get_arg(5);
            $this->qr_code = func_get_arg(6);
            $this->loja_id_loja = func_get_arg(7);
            $this->cor_id_cor = func_get_arg(8);
            $this->tipo_id_tipo = func_get_arg(9);
            $this->pedra_id_pedra = func_get_arg(10);
            $this->tamanho = func_get_arg(11);
            $this->imagem = func_get_arg(12);
        }
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

    function getQr_code() {
        return $this->qr_code;
    }

    function getLoja_id_loja() {
        return $this->loja_id_loja;
    }

    function getCor_id_cor() {
        return $this->cor_id_cor;
    }

    function getTipo_id_tipo() {
        return $this->tipo_id_tipo;
    }

    function getPedra_id_pedra() {
        return $this->pedra_id_pedra;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getImagem() {
        return $this->imagem;
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

    function setQr_code($qr_code) {
        $this->qr_code = $qr_code;
    }

    function setLoja_id_loja($loja_id_loja) {
        $this->loja_id_loja = $loja_id_loja;
    }

    function setCor_id_cor($cor_id_cor) {
        $this->cor_id_cor = $cor_id_cor;
    }

    function setTipo_id_tipo($tipo_id_tipo) {
        $this->tipo_id_tipo = $tipo_id_tipo;
    }

    function setPedra_id_pedra($pedra_id_pedra) {
        $this->pedra_id_pedra = $pedra_id_pedra;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public static function listaJoias() {
        return JoiaDao::listaJoias();
    }

    public static function listaJoia($joia) {
        return JoiaDao::listaJoia($joia);
    }

    public static function insereJoia($joia) {
        return JoiaDao::insereJoia($joia);
    }

    public static function editaJoia($joia) {
        return JoiaDao::editaJoia($joia);
    }

    public static function deletaJoia($joia) {
        return JoiaDao::deletaJoia($joia);
    }

}
