<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnectBD
 *
 * @author Ricardo
 */
class ConnectBD {
    private $host;
    private $user;
    private $password;
    private $bd;
    
    function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->bd = "crisjoias";
    }
    
    public function connectBD(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->password);
        return $conn;
    }

}
