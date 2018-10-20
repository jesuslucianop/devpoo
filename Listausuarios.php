<?php
include "Header.php";
include "./Clases/Motor.php";
$conexion = Conexion::obj();



?>

<div class="row">
<table class="table" id="tbl">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Usuario</th>
<th>Rol</th>

</tr>
</thead>
<tbody id="tbody">
<tr>
<?php 

$datos = Usuarios::Listarusuarios();

foreach($datos as $fila){
    echo "<tr>
         <td>{$fila->Id}</td>
        <td>{$fila->nombre}</td>
        <td>{$fila->usuario}</td>
          <td>{$fila->Rol}</td>
    
             </tr>";
}
?>
</tr>
</tbody>

</table>


</div>
<?php
include "Footer.php";
?>