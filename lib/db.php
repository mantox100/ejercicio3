<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



try{
    $dblink = new PDO('mysql:host=DBHOST;dbname=DBNAME', DBUSR, DBPSW);
} catch (Exception $ex) {
    echo 'error en la coneccion', $ex->getMessage(), "\n";
}