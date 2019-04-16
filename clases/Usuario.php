<?php
include("../lib/db.php");

/*
 
 * * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author cetecom
 */
class Usuario {
    //put your code here
    private $nombre;
    private $nomUsuario;
    private $clave;
    
    function __construct($nombre, $nomUsuario, $clave) {
        $this->nombre = $nombre;
        $this->nomUsuario = $nomUsuario;
        $this->clave = md5($clave);
    }

    
    function getNomUsuario() {
        return $this->nomUsuario;
    }

    function setNomUsuario($nomUsuario) {
        $this->nomUsuario = $nomUsuario;
    }

        
    
    function getNombre() {
        return $this->nombre;
    }

    function getClave() {
        return $this->clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function valida()
    {
//        verificamos la existencia
        if(!isset($dblink))
        {
            return false;
        }
//        el signo de interrogacion es para luego usarlo 
        $PDost=$dblink->prepare("select id,nombre,nomusu,clave from usuario where nomusu=? and clave=?");
        $PDost->execute(array($this->nomUsuario,$this->clave));
        
        if($row=$PDost->fetch(PDO::FETCH_OBJ))
        {
            return true;
        }else
        {
            return false;
        }
    }

}
