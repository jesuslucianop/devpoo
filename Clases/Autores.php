<?php 

class Autores
{
private $id = 0;
private $Nombre = "";
private $Nacionalidad = "";

    function __construct()
    {
    
        $this->id = 89;
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
        }
        else
        {
            echo "No existe una propiedad llamada {$prop}";
        }
    }
    static function AllAutores()
    {
        $data = array();
        $resultautores = mysqli_query(Conexion::obj(),"Select * from autores ");
            //$fila = mysqli_fetch_object($resultautores);
            while( $fila = mysqli_fetch_object($resultautores)){
                $data[] = $fila;
            }
            return $data;

    }
    static function FiltroTabla($id)
    {
        $datos = array();
        $resultautores = mysqli_query(Conexion::obj(),"Select Nombre from Autores where Id_autores ='".$id."' ");
            //$fila = mysqli_fetch_object($resultautores);
            while( $fila = mysqli_fetch_object($resultautores)){
                $datos[] = $fila;
            }
            return $datos;
    }
}