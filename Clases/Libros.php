<?php

class Libros  {

private $id=4;

private $titulo = "";
private $archivo = "";

private $cantidad_pagina=0;
private $id_autores = 0;

private $url= "";

    function __construct()
    {
    

   //     echo $this->id;

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
    function SubirLibro()
    {
        $titulo = $this->titulo;// Titulo Del Libro
        $cantidad_paginas = $this->cantidad_pagina;

        $autores = $this->id_autores;
        $name = $this->archivo['file']['name']; //nombre de la imagen
        $name = str_replace(" ", "_", $name);
        $tmp = $this->archivo['file']['tmp_name']; // nombre temporal de la imagen
        $num = rand(0,999999);
        $fecha = date("dmY");
       $upfile = $fecha."_".$num."_".$name; //nuevo nombre de la imagen
       $destiny = "./Repositorio/";
       $url = $destiny."/".$upfile;
     
        echo $this->archivo['file']['name'];
        $sql = "INSERT INTO GBH.libro (Titulo,Id_autores, Cant_pag, url,Nombre_del_archivo)VALUES('".$titulo."','".$autores."','".$cantidad_paginas."','".$url."','".$upfile."') ";
        $result = mysqli_query(Conexion::obj(),$sql);
        move_uploaded_file($tmp, $destiny . $upfile);
  

    }
    function DescargarLibroPDf()
     {
        $ruta = getBaseUrl()."Repositorio/";
        header('Content-type: application/pdf');
        // It will be called downloaded.pdf
        header('Content-Disposition: attachment; filename="'.$this->titulo.'.pdf"');
        
        // The PDF source is in original.pdf
        readfile($ruta);
    
    }  
    //Funcion para buscar dentro de la carpeta si existe un txt con los libros exportados a txt 
    }

