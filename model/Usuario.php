<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Ricardo
 */
@include_once("../dao/UsuarioDao.php");

class Usuario {

    private $id_usuario;
    private $nome_usuario;
    private $login;
    private $senha;

    function __construct() {
        /*
          PHP não aceita sobrecarga de método/construtores, é necessário fazer
          a verificação abaixo
         */
        if (func_num_args() == 2) { //se o numero de argumentos para o construtor for igual a 2
            $this->login = func_get_arg(0); //Login
            $this->senha = func_get_arg(1); //Senha
        } else {//se o numero de argumentos para o construtor for igual a 4
            if (func_num_args() == 4) {
                $this->id_usuario = func_get_arg(0); //Id
                $this->nome_usuario = func_get_arg(1); //nome
                $this->login = func_get_arg(2); //login
                $this->senha = func_get_arg(3); //senha
            } else {
                if (func_num_args() == 3) {
                    $this->nome_usuario = func_get_arg(0); //nome
                    $this->login = func_get_arg(1); //login
                    $this->senha = func_get_arg(2); //senha
                }
            }
        }
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function verificaLogin($obj) {
        if ($obj != null)
            return true;
        else
            return false;
    }

    public static function listaUsuarios() {
        return UsuarioDao::listaUsuarios();
    }

    public static function listaUsuario($usuario) {
        return UsuarioDao::listaUsuario($usuario);
    }

    public static function lnsereUsuario($id_usuario) {
        return UsuarioDao::insereUsuario($id_usuario);
    }

    public static function editaUsuario($id_usuario) {
        return UsuarioDao::editaUsuario($id_usuario);
    }

    public static function deletaUsuario($id_usuario) {
        return UsuarioDao::deletaUsuario($id_usuario);
    }

    public static function Login($this) {
        return UsuarioDao::Login($this);
    }

}
