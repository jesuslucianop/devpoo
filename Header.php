<?php 
session_start();

function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

if(empty($_SESSION['nombre_usuario'])){
  header("Location:./index");
}
if(isset($_POST['btncerrarsession'])){
  session_destroy();
  header("Location:./index");
}


?>
<html>
<head>
<link rel="stylesheet" href="<?php echo getBaseUrl();?>Assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo getBaseUrl();?>Assets/css/style.css"/>
<script type="text/javascript" src="<?php echo getBaseUrl();?>Assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo getBaseUrl();?>Assets/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./Dashboard">Api Bibliotecaria</a>
    </div>
    <ul class="nav navbar-nav">
   <?php if($_SESSION['Rol_usuario'] == 1){?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./Registrar">Registrar Nuevo Usuario</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="./Listausuarios">Lista De usuarios</a></li>
          </ul>
          <?php }?>
              <li><a href="./LibrosDisponible">Libros Disponible</a></li>
               <li><a href="./Upload">Subir Libros</a></li>
           
   </li>
  
    </ul>
        <ul class="nav navbar-nav navbar-right">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><?php echo "   ". $_SESSION['nombre_usuario'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li role="separator" class="divider"></li>
            <li><form method="POST" action=""><button   type="submit" class="btn btn-danger" name="btncerrarsession">Cerrar session</button></form></li>
          
          </ul>

    </ul>
     <ul class="nav navbar-nav navbar-right">
  
      </ul>
  </div>
</nav>
  

<div class="container">
