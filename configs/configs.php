<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of configs
 *
 * @author Ricardo
 */
class configs {
    //Converte uma data no formato americano para o formato brasileiro
    public static function dateToBr($date){
        $d = explode('-', $date);
        $nData = $d[2].'/'.$d[1].'/'.$d[0];
        return $nData;
    }
    
    //Converte uma data no formato brasileiro para o formato americano
    public static function datoToUs($date){
        $d = explode('/', $date);
        $nData = $d[2].'-'.$d[1].'-'.$d[0];
        return $nData;
    }
}
