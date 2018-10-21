<?php 
include "./Clases/Motor.php";
$mensaje = "";
if(isset($_POST['btnlogin'])){
$u = new Usuarios();
$u->username= $_POST['usuario']; 
$u->password= $_POST['clave']; 
$u->login();
if($u->login()=="false"){
    $mensaje = "<div class='mensajealerta'><h5>Credenciales incorrectas</h5></div>";
}

}
session_Start();
if(isset($_SESSION['nombre_usuario'])){
    header("Location:./Dashboard");
}
?>
<html>
<head>
<link rel="stylesheet" href="./Assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./Assets/css/style.css"/>
<script type="text/javascript" src="./Assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./Assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Assets/js/script.js"></script>


</head>
<body>


<div class="container">

<div class="row">
<div class="col col-md-4 col-md-offset-4">
<h1>Api Bibliotecaria</h1>
<?php echo $mensaje;?>
<form method="POST" action=".">
   <div class="form-group input-group">
<label class="input-group-addon">Usuario</label>
        <input type="text" name="usuario" class="form-control"/>
        </div>
        <div class="form-group input-group">
        <label class="input-group-addon">Clave</label>
        <input type="password" name="clave" class="form-control"/>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary" name="btnlogin">Entrar</button>
        </div>
        </form>
    </div>

        </div>
        </div>

<?php
 include("Footer.php");

?>