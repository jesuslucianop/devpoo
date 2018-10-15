<?php

class Libros extends Autores {

private $id=0;

private $titulo = "";

private $cantidad_pagina=0;

private $url;

    function __construct()
    {
        echo $this->id;

    }
    function __toString(){
        return "Soy libro";
    }
    function __get($prop)
    {
        if(isset($this->$prop))
        {
          return  $this->$prop;
        }else{
            echo "No existe una propiedad llamada {$prop}";
        }
    }
    function __Set($prop,$val){
        if(isset($this->$prop))
        {
           $this->$prop = $val;
        }else{
            echo "No existe una propiedad llamada {$prop}";
        }
    }
    static function MostrarLibros()
    {
        $datos = array();
        $con = Conexion::obj();
        $rs = mysqli_query($con,"Select * from libro"); 
      while( $fila = mysqli_fetch_object($rs)){
        $datos[] = $fila;
    }
        return $datos;


    }

}