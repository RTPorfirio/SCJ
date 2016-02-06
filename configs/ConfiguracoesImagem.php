<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of configImg
 *
 * @author Ricardo
 */
class configImg {

    private $imagem;
    private $config;
    private $erro;

    function __construct($imagem) {
        $this->imagem = $imagem;
        $this->config = $config = array();

        // Tamanho máximo do arquivo (em bytes) 
        $config["tamanho"] = 106883;

        // Largura máxima (pixels) 
        $config["largura"] = 350;

        // Altura máxima (pixels) 
        $config["altura"] = 180;


        $this->erro = $erro = array();
    }

    public function verificaFormato() {
        $resultado=false;
        if ($this->imagem) {
            if (!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $this->imagem["type"])) {
                $this->erro[] = "Arquivo em formato inválido! A imagem deve ser jpg, "
                        . "jpeg, bmp, gif ou png. Envie outro arquivo";
            }
            else{
                $resultado - true;
            }
        }
        return $resultado;
    }

    public function verificaTamanho() {
        $resultado=false;
        if ($this->imagem) {
            if ($this->imagem["size"] > $this->config["tamanho"]) {
                $this->erro[] = "Arquivo em tamanho muito grande! A imagem deve ser "
                        . "de no máximo " . $this->config["tamanho"] . " bytes. Envie "
                        . "outro arquivo";
            }
            else{
                $resultado=true;
            }
        }
        return $resultado;
    }
    
    public function verificaLargura() {
        $resultado=false;
        if ($this->imagem) {
            if ($this->imagem["0"] > $this->config["largura"]) {
                $this->erro[] = "Arquivo com largura muito grande! A imagem deve"
                        . " ter no máximo " . $this->config["largura"] 
                        . "largura";
            }
            else{
                $resultado=true;
            }
        }
        return $resultado;
    }
    
    public function verificaAltura() {
        $resultado=false;
        if ($this->imagem) {
            if ($this->imagem["1"] > $this->config["altura"]) {
                $this->erro[] = "Arquivo com altura muito grande! A imagem deve"
                        . " ter no máximo " . $this->config["altura"] 
                        . "altura";
            }
            else{
                $resultado=true;
            }
        }
        return $resultado;
    }
    
}
