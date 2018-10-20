<?php 

class ManejoArchivo{
    private $id = 0;
    private $archivo = "";
    function __construct()
    {

    }

    function __get($prop)
    {

        if(isset($this->$prop))
        {
            return  $this->$prop;
        }
        else{

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
    function Buscarcarpeta()
    {

        
    }

}