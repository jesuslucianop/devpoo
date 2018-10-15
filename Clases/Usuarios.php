<?php

class Usuarios
{
    private $id = 0;
    private  $nombre="";
    private $username = "";
    private  $password = "";
    private $rol= "";
        
       function __construct(){
           
    
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
        //Metodo Para Eliminar Los Usuarios.
        function login()
        {
            session_start();
            $con = Conexion::obj();
            $row = mysqli_query($con,"Select * from Usuarios where usuario = '".$this->username."' and password ='".$this->password."' ");
            
            if(mysqli_num_rows($row) > 0 ) 
            {
                $fila = mysqli_fetch_array($row);
                $_SESSION['nombre_usuario'] = $fila['nombre'];
                $_SESSION['Rol_usuario'] = $fila['Rol'];
                header("Location:http://localhost/invento/dashboard.php");
                //echo $_SESSION['nombre_usuario'];
                //echo $_SESSION['Rol_usuario'];
            }else{
                    return "false";
            }
                   
              
            

        }
        public function EliminaRegistro($id)
        {
            $editor = "DELETE FROM GBH.Usuarios  WHERE id = '".$id."' ";
            $Consulta = $this->db->query($editor);
        
        }
        //Metodo Para Regisrar Usuarios Nuevos En la base DE datos
        public function RegistrarUsuarios()
        {
  $con = Conexion::obj();
            $query = mysqli_query($con,"INSERT INTO GBH.Usuarios 
            (nombre,  usuario,password, Rol) VALUES('".$this->nombre."', '".$this->username."', '".$this->password."' ,
            '".$this->rol."' )");

            if($query){
                echo "Registrado correctamente";
            }
        }
        static function Listarusuarios(){
            $datos = array();
            $con = Conexion::obj();
            $rs = mysqli_query($con,"Select * from Usuarios"); 
          while( $fila = mysqli_fetch_object($rs)){
            $datos[] = $fila;
        }
            return $datos;
        }
        public function GetSeachUser()
        {
            $result = $this->db->query("Select * from Usuarios ");
        // $rows = $result->fetch_array(MYSQLI_ASSOC);
        
            while($row = $result->fetch_array())
            {
            $rows3[] = $row;
            }
            
            foreach($rows3 as $row2)
            {
        echo $row2;

            }
            

        }

    }//Finalizacion de la clase

  

    if(isset($_POST['btnborrar']))
    {
        $us = new Usuarios();
        echo ($us->EliminaRegistro($_POST['id']));
       


    }
  