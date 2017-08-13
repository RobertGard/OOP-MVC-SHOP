<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author wakka
 */
class Db {
    
    public static function connectDb(){
        $host = 'localhost';
        $dbname = 'dbstore';
        $user = 'root';
        $pass = '1997';
        $charset = 'utf8';
        
        $dsn = "mysql:host=".$host.";dbname=".$dbname.";charset=".$charset."";
        
        $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
        
        $db = new PDO($dsn, $user, $pass, $options);
        
        return $db;
    }
}
