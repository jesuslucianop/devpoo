<?php 
include "Header.php";
include "./Clases/Motor.php";

if($_POST)
{
  $u = new Usuarios();
  $u->nombre= $_POST['nombrer']; 
  $u->username= $_POST['usuarior']; 
  $u->password= $_POST['passwordr']; 
  $u->rol= $_POST['rol']; 
  $u->RegistrarUsuarios();
}


?>
<form method= "POST" action="">  
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registrar Usuarios Api Bibliotecaria</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="nombrer" name="nombrer" type="text" placeholder="Ingrese Nombre del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuario</label>  
  <div class="col-md-4">
  <input id="usuarior" name="usuarior" type="text" placeholder="Ingrese el Usuario del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
  <div class="col-md-4">
    <input id="passwordr" name="passwordr" type="password" placeholder="Ingrese la Clave Del nuevo Usuario" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Rol</label>
  <div class="col-md-4">
  <select name="rol" id="rol" class="form-control">
    <option value=""></option>
    <option value="1">Administrador</option>
    <option value="3">Lector</option>
    <option value="2">Usuario</option>
  
  </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button  type ="submit" id="btnregistrar" name="singlebutton" class="btn btn-primary">Registrar</button>

  </div>
</div>

</fieldset>
</div>
</form>
<?php
include "Footer.php";
?>