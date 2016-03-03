<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author Ricardo
 */
class Upload {

    // Constante responsável por guardar a pasta de onde os arquivos estarão.
    const _FOLDER_DIR = "../joias/";

    // Variável para guardar o array relacionado ao arquivo.
    public $_file;
    private $nome;

    // Método construtor que recebe o array com os arquivos via POST
    // Verifica se já existe diretório, caso não; é criado.
    function __construct($curFile) {
        if (!file_exists(self::_FOLDER_DIR)) {
            mkdir(self::_FOLDER_DIR);
        }
        $this->_file = $curFile;
        $this->nome = self::gerarNome(100);
    }

    public function getNome(){
        return $this->nome;
    }


    //Metódo para:
    //Verificar se existe arquivo;
    //Setar nome aleatório para evitar repetição e substiuição de arquivos;
    //Cria nome de arquivo concatenando DIRETÓRIO + NOME ALEATÓRIO + NOME DO ARQUIVO ENVIADO.
    //Verifica se o arquivo foi realizado o upload
    //Move o arquivo para o diretório escolhido, inserido na concatenação realizada.
    //Retorna true em casos de upload com sucesso e false com erro.
    function makeUpload() {
        if (isset($this->_file)) {
            $nome = $this->_file["name"];
            @$fileName = self::_FOLDER_DIR . "_" . $this->nome;
            if (is_uploaded_file($this->_file["tmp_name"])) {
                if (move_uploaded_file($this->_file["tmp_name"], $fileName)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
    
        function gerarNome($k) {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $palavra = "";
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < $k; $i++) {
            $n = rand(0, $alphaLength);
            $palavra = $palavra . $alphabet[$n];
        }
        $fim =pathinfo($this->_file["name"]);
        $fim = $fim['extension'];
        return $palavra.".".$fim;
    }

}

?>
