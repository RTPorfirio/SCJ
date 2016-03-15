<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author Ricardo
 */
include_once 'ConnectBD.php';
include_once '../model/Usuario.php';

class UsuarioDao {

    public static function ListaUsuarios() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from usuario");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $usuario = null;
        foreach ($sm as $registros) {
            $usuario = self::CreateUser($registros);
            array_push($array, $usuario);
        }
        return $array;
    }

    public static function ListaUsuario($id) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from usuario where id_usuario=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $usuario = self::CreateUser($sm);
        return $usuario;
    }

    public static function InsereUsuario($usuario) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`usuario` (`nome_usuario`, `login`, `senha`) VALUES (:nome,:login,:senha)");
        $insere->bindValue(":nome", $usuario->getNome_usuario(), PDO::PARAM_STR);
        $insere->bindValue(":login", $usuario->getLogin(), PDO::PARAM_STR);
        $insere->bindValue(":senha", md5($usuario->getSenha()), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaUsuario($id) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`usuario` WHERE `usuario`.`id_usuario` = :id");
        $del->bindValue(":id", $id, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaUsuario($usuario) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $edita = $conn->prepare("UPDATE `crisjoias`.`usuario` SET `nome_usuario` = :nome, `login` = :login, `senha` = :senha WHERE `usuario`.`id_usuario` = :id;;");
        $edita->bindValue(":id", $usuario->getId_usuario(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $usuario->getNome_usuario(), PDO::PARAM_STR);
        $edita->bindValue(":login", $usuario->getLogin(), PDO::PARAM_STR);
        $edita->bindValue(":senha", md5($usuario->getSenha()), PDO::PARAM_STR);
        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    public static function Login($usuario,$senha) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $login = $conn->prepare("select * from usuario where login=:login and senha=:senha");
        $login->bindValue(":login", $usuario, PDO::PARAM_STR);
        $login->bindValue(":senha", $senha, PDO::PARAM_STR);
        $login->execute();
        if ($login->rowCount() == 1) {
            $sm = $login->fetch(PDO::FETCH_ASSOC);
            $usuario = self::createUser($sm);
            return $usuario;
        } else {
            $usuario = null;
        }
    }

    private function CreateUser($sm) {
        $usuario = new Usuario(
                $sm['id_usuario']
                , $sm['nome_usuario']
                , $sm['login']
                , $sm['senha']);
        return $usuario;
    }

}
