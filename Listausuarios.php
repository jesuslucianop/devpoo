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
/*foreach($rows3 as $row2)
{
    echo "<tr>";
    echo "<td>" . $row2['nombre'] . "</td>";
    echo "<td>" . $row2['usuario'] . "</td>";
    switch ($row2['Rol'] ) {
        case 3:
        echo "<td>" ."Lector" ."</td>";
            break;
        
        case 1:
        echo "<td>" ."Administrador" ."</td>";
            break;
        
        case 2:
        echo "<td>" ."Usuario" ."</td>";
            break;
        
        default:
            # code...
            break;
    }
   if($row2['Rol']==2 or $row2['Rol']==3 ){
    echo "<td>" ."<button class='btn btn-danger btnborrar' type='button' id='' idusuario='".$row2['Id']."'>Borrar</button>" ."</td>";
    //echo "<td>" ."<button class='btn btn-warning ' type='button'>Editar</button>" ."</td>";

   }


    echo "</tr>";

}*/
$datos = Usuarios::Listarusuarios();
var_dump($datos);
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