<?php

include_once 'ConnectBD.php';
include_once '../model/Vendedor.php';

class VendedorDao {

    public static function ListaVendedores() {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from vendedor");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $array = array();
        $vendedor = null;
        foreach ($sm as $registros) {
            $vendedor = self::CreateVendedor($registros);
            array_push($array, $vendedor);
        }
        return $array;
    }

    public static function ListaVendedor($id_vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $busca = $conn->prepare("select * from vendedor where id_vendedor=:id");
        $busca->bindValue(":id", $id_vendedor, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $vendedor = self::CreateVendedor($sm);
        return $vendedor;
    }

    public static function InsereVendedor($vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $insere = $conn->prepare("INSERT INTO `crisjoias`.`vendedor` (`nome_vendedor`, `rg`, `cpf`, `telefone`, `celular`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`) VALUES (:nome,:rg,:cpf, :telefone, :celular, :logradouro, :numero, :complemento, :bairro, :cidade, :estado, :cep)");
        $insere->bindValue(":nome", $vendedor->getNome_vendedor(), PDO::PARAM_STR);
        $insere->bindValue(":rg", $vendedor->getRg(), PDO::PARAM_STR);
        $insere->bindValue(":cpf", $vendedor->getCpf(), PDO::PARAM_STR);
        $insere->bindValue(":telefone", $vendedor->getTelefone(), PDO::PARAM_STR);
        $insere->bindValue(":celular", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":logradouro", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":numero", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":complemento", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":bairro", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":cidade", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":estado", $vendedor->getCelular(), PDO::PARAM_STR);
        $insere->bindValue(":cep", $vendedor->getCelular(), PDO::PARAM_STR);
        if ($insere->execute() == 1)
            return true;
        else
            return false;
    }

    public static function DeletaVendedor($id_vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();
        $del = $conn->prepare("DELETE FROM `crisjoias`.`vendedor` WHERE `vendedor`.`id_vendedor` = :id");
        $del->bindValue(":id", $id_vendedor, PDO::PARAM_INT);
        if ($del->execute() == 1)
            return 1;
        else
            return 0;
    }

    public static function EditaVendedor($vendedor) {
        $conexao = new ConnectBD();
        $conn = $conexao->connectBD();

        $edita = $conn->prepare("UPDATE `vendedor` SET `nome_vendedor` = :nome, `rg` = :rg, `cpf` = :cpf, `telefone` = :telefone, `celular` = :celular, `logradouro` = :log, `numero` = :numero, `complemento` = :complemento, `bairro` = :bairro, `cidade` = :cidade, `estado` = :estado, `cep` = :cep WHERE `vendedor`.`id_vendedor` = :id;");
        
        $edita->bindValue(":id", $vendedor->getId_vendedor(), PDO::PARAM_INT);
        $edita->bindValue(":nome", $vendedor->getNome_vendedor(), PDO::PARAM_STR);
        $edita->bindValue(":rg", $vendedor->getRg(), PDO::PARAM_STR);
        $edita->bindValue(":cpf", $vendedor->getCpf(), PDO::PARAM_STR);
        $edita->bindValue(":telefone", $vendedor->getTelefone(), PDO::PARAM_STR);
        $edita->bindValue(":celular", $vendedor->getCelular(), PDO::PARAM_STR);
        $edita->bindValue(":log", $vendedor->getLogradouro(), PDO::PARAM_STR);
        $edita->bindValue(":numero", $vendedor->getNumero(), PDO::PARAM_STR);
        $edita->bindValue(":complemento", $vendedor->getComplemento(), PDO::PARAM_STR);
        $edita->bindValue(":bairro", $vendedor->getBairro(), PDO::PARAM_STR);
        $edita->bindValue(":cidade", $vendedor->getCidade(), PDO::PARAM_STR);
        $edita->bindValue(":estado", $vendedor->getEstado(), PDO::PARAM_STR);
        $edita->bindValue(":cep", $vendedor->getCep(), PDO::PARAM_STR);

        if ($edita->execute() == 1)
            return true;
        else
            return false;
    }

    private function CreateVendedor($sm) {
        $vendedor = new Vendedor(
                $sm['id_vendedor']
                , $sm['nome_vendedor']
                , $sm['rg']
                , $sm['cpf']
                , $sm['telefone']
                , $sm['celular']
                , $sm['logradouro']
                , $sm['numero']
                , $sm['complemento']
                , $sm['bairro']
                , $sm['cidade']
                , $sm['estado']
                , $sm['cep']);
        return $vendedor;
    }

}
