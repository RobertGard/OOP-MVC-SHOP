<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainLibrary
 *
 * @author wakka
 */
class MainLibrary {
    

    public static function cycleData($query){
        $arrayData = array();
        
        while($row = $query->fetch()){
            $arrayData[] = $row;
        }
        
        return $arrayData;
    }
    
    public static function d($value,$key = 0) {
    if($key){
        echo'<pre>';
        print_r($value);
    } else {
        echo'<pre>';
        print_r($value);
        exit();
    }}
}
