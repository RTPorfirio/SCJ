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
    private $nota_fiscal;
    private $observacao;
    private $codBase;
    private $qr_code;
    private $tamanho;
    private $imagem;
    private $tipo;
    private $loja;
    private $cor;
    private $pedra;
    private $valida;

    function __construct() {

        if (func_num_args() == 15) {
            $this->id_joia = func_get_arg(0);
            $this->preco_custo = func_get_arg(1);
            $this->preco_venda = func_get_arg(2);
            $this->consignado = func_get_arg(3);
            $this->nota_fiscal = func_get_arg(4);
            $this->observacao = func_get_arg(5);
            $this->codBase = func_get_arg(6);
            $this->qr_code = func_get_arg(7);
            $this->tamanho = func_get_arg(8);
            $this->imagem = func_get_arg(9);
            $this->tipo = func_get_arg(10);
            $this->loja = func_get_arg(11);
            $this->cor = func_get_arg(12);
            $this->pedra = func_get_arg(13);
            $this->valida = func_get_arg(14);
        } else {
            if (func_num_args() == 14) {
                $this->preco_custo = func_get_arg(0);
                $this->preco_venda = func_get_arg(1);
                $this->consignado = func_get_arg(2);
                $this->nota_fiscal = func_get_arg(3);
                $this->observacao = func_get_arg(4);
                $this->codBase = func_get_arg(5);
                $this->qr_code = func_get_arg(6);
                $this->tamanho = func_get_arg(7);
                $this->imagem = func_get_arg(8);
                $this->tipo = func_get_arg(9);
                $this->loja = func_get_arg(10);
                $this->cor = func_get_arg(11);
                $this->pedra = func_get_arg(12);
                $this->valida = func_get_arg(13);
            }
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

    function getNota_fiscal() {
        return $this->nota_fiscal;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getCodBase() {
        return $this->codBase;
    }

    function getQr_code() {
        return $this->qr_code;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getLoja() {
        return $this->loja;
    }

    function getCor() {
        return $this->cor;
    }

    function getPedra() {
        return $this->pedra;
    }

    function getValida() {
        return $this->valida;
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

    function setNota_fiscal($nota_fiscal) {
        $this->nota_fiscal = $nota_fiscal;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    function setCodBase($codBase) {
        $this->codBase = $codBase;
    }

    function setQr_code($qr_code) {
        $this->qr_code = $qr_code;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setLoja($loja) {
        $this->loja = $loja;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPedra($pedra) {
        $this->pedra = $pedra;
    }

    function setValida($valida) {
        $this->valida = $valida;
    }

    public static function listaJoias() {
        return JoiaDao::listaJoias();
    }

    public static function listaJoia($joia) {
        return JoiaDao::listaJoia($joia);
    }

    public static function listaJoiaQR($joia, $teste) {
        return JoiaDao::listaJoiaQR($joia, $teste);
    }

    public static function insereJoia($joia) {
        return JoiaDao::insereJoia($joia);
    }

    public static function EditaJoia($joia) {
        return JoiaDao::EditaJoia($joia);
    }

    public static function EditaValida($joia) {
        return JoiaDao::EditaValida($joia);
    }

    public static function deletaJoia($joia) {
        return JoiaDao::deletaJoia($joia);
    }

    public static function SelecionaUltimoId() {
        return JoiaDao::SelecionaUltimoId();
    }

  

}
