
<?php 

include ("Header.php");
include "./Clases/Motor.php";

$add = new Autores();
$addl = new Libros();
if(isset($_POST['btnagregarautores'])){

$add->Nombre= $_POST['NombreAutor'];
$add->AgregarAutor();
}
if(isset($_POST['btnuploadlibro'])){

$addl->titulo = $_POST['titulo'];
$addl->archivo = $_FILES;
$addl->cantidad_pagina = $_POST['cantidad'];
$addl->id_autores = $_POST['autores'];
$addl->url = "s";
echo $addl->SubirLibro();
}
?>

<div class="row">
<div class="col col-md-4 col-md-offset-4 color">
<h1></h1>
<fieldset>

<!-- Form Name -->
<legend><h3>Seccion de registro de Libros</h3></legend>

<form method="POST" action="" enctype="multipart/form-data">
<div class="form-group input-group">
<label class="input-group-addon">Titulo del Libro</label>
<input type="text" name="titulo" id="titulo" class="form-control"/>
</div>
<div class="form-group input-group">
<label class="input-group-addon">Documento PDF</label>
<input type="file" name="file" id="file" class="form-control"/>
</div>
<div class="form-group input-group">

<label class="input-group-addon">Autores</label>

<select name="autores" class="form-control">
<option value="0">Selecccione un Autor</option>
 <?php
 $rows3 = Autores::AllAutores();
foreach($rows3 as $row2)
{

  echo "<option value='".$row2->Id_autores."'>".$row2->Nombre."</option>";
}
 ?>
  </select>
  <label class="label-inline" ><a href="#" data-toggle="modal" data-target="#exampleModalCenter">
 Registrar autor no encontrado
</a></label>
</div>
<div class="form-group input-group">
<label class="input-group-addon">Cantidad de Paginas</label>
<input type="text" name="cantidad" id="titulo" class="form-control"/>
</div>
<div class="form-group input-group">
<button class="btn btn-primary" type="submit" name="btnuploadlibro">Enviar</button>
</div>

</div>
</form>
<!-- Button trigger modal -->

<form method="POST" action="">
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar autor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group input-group">
<label class="input-group-addon">Nombre del autor a Agregar</label>
<input type="text" name="NombreAutor" id="NombreAutor" class="form-control"/>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btnagregarautores">Guardar</button>
      </div>
    </div>
  </div>
</div>
</fieldset>
</form>
</div>
<?php
 include("Footer.php");

?>