<?php
include "Header.php";
include "./Clases/Motor.php";
$directorio = './tmp';
$ficheros1  = scandir($directorio);

$data = array();
function buscar($dir,&$archivo_buscar) 
{   // Funcion Recursiva 
    // Autor DeeRme 
    // http://deerme.org 
     if ( is_dir($dir) ) 
     { 
          // Recorremos Directorio 
          $d=opendir($dir);  
          while( $archivo = readdir($d) ) 
          { 
            if ( $archivo!="." AND $archivo!=".."  ) 
            { 
                  
                 if ( is_file($dir.'/'.$archivo) ) 
                 { 
                      // Es Archivo 
                      if ( $archivo == $archivo_buscar  ) 
                      { 
                           return ($dir.'/'.$archivo); 
                    } 
                     
                } 
                  
                if ( is_dir($dir.'/'.$archivo) ) 
                { 
                     // Es Directorio 
                     // Volvemos a llamar 
                     $r=buscar($dir.'/'.$archivo,$archivo_buscar); 
                     if ( basename($r) == $archivo_buscar ) 
                     { 
                          return $r; 
                    } 
                      
                      
                } 
                   
                   
                 
                  
                  
            } 
                   
        } 
                   
    } 
    return FALSE; 
} 


$ruta2 = getBaseUrl();
?>
<div class="row">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo Libro</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Cantidad de pagina</th>
      <th scope="col"> Enlace </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 

$fila= Libros::MostrarLibros();
    foreach($fila as $row){
      $fila_autores = Autores::FiltroTabla($row->id);

      echo "<tr>

      <td>{$row->id}</td>
      <td>{$row->titulo}</td>
      ";
      echo "<td>";
      foreach($fila_autores as $fl){
    
      echo $fl->Nombre;
    }
    echo "</td>";

    echo "<td>{$row->cant_pag}</td>";    
    
    echo "<td>" 
    ."
      <form method='GET' action=''>
        <a href={$ruta2}prueba.php?btndescargarpdf=1&id=".$row->url."&nombre=",urlencode($row->titulo )," class='btn btn-primary'>Descargar</a>
        <a href={$ruta2}prueba.php?etexto=1&url=".$row->url."&id=",$row->id ," class='btn btn-warning btntext' id='etexto' url='".$row->url."'  urlid='".$row->id."' >Exportar texto</a>
 
     
    ";
    //$clase =new ManejoArchivo();
    //$clase->archivo = $row->id;
    $archivo = $row->id."pdf";
    $ruta = getcwd ();
    $clase = buscar($ruta.'/tmp/',$archivo); ;
   
      echo "<a href={$ruta2}Prueba.php?dte=1&id=".$row->id." class='btn btn-primary dte'>Descargar txt Exportado</a>";
    
    echo"</td>";
         
    echo  "</form>";
    }

?>
    </tr>
  </tbody>
</table>

</div>
<?php

include "Footer.php";
?>