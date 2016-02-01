<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "./model/Pedra.php";

$pedras = new Pedra();

$pedras->setNome_pedra("e");

echo $pedras->getNome_pedra();