
<?php
//Para este utilize una clase no creada por mi, mas bien una Api donde puedo manejar el pdf y obtener su texto.
Include("class.pdf2text.php");
Include("./Clases/Motor.php");
//Entrada del button exportar a txt


// Busquedad Recursiva 

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
if(isset($_GET['etexto'])){


    function limpiarString($texto)
    {

        $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $texto);	     					
        return $textoLimpio;
    }
    // instancia de la clase de libreria utilizada 
    $a = new PDF2Text();

    $a->setFilename($_GET['url']); 
    $a->decodePDF();
    $contenido =  str_replace(array("\n", "\r"), '', trim($a->output()));
    $contenido2 =  (utf8_decode($contenido)); 
    if($contenido2==""){
        echo  false;
        
        
        echo "<script>
     
        window.location.href = './LibrosDisponible';</script>";
    }
    else{
    //echo $contenido;
    //echo  $contenido2;
    echo "paso";
    $archivo='3.txt'; 

    echo buscar('C:\xampp\htdocs\invento\tmp',$archivo); 
   /* echo "<script>
  
    window.location.href = 'http://localhost/invento/LibrosDisponible';
    alert('Txt Exportado y listo para descargar');</script>";
*/     
        
echo "<script>
     
window.location.href = './LibrosDisponible';</script>";
    }
    //$contenido = limpiarString(utf8_decode($a->output())); 
    //print_r(utf8_encode($a->output()));
    if (file_exists("tmp/datos.txt")){
        $archivo = fopen("tmp/".$_GET['id'].".txt", "a");
  
        fwrite($archivo, PHP_EOL ."$contenido2");
        fclose($archivo);
        }
        else{
            $archivo = fopen("tmp/".$_GET['id'].".txt", "w" );
            fwrite($archivo, PHP_EOL ."$contenido2");
            fclose($archivo);
        }

    }//Fin del botton exportar a txt
    if(isset($_GET['dte'])){
        $ruta  = "tmp/".$_GET['id'].".txt";
        header('Content-type:text/plain');

    // Este llamara a downloaded.pdf 
        header('Content-Disposition: attachment; filename="'.$_GET['id'].'.txt"');
    
        // Aqui se forma llamando a  original.pdf
        readfile("./tmp/".$_GET['id'].".txt");
    }
//Parte para Descargar Pdf
    if(isset($_GET['btndescargarpdf'])){
        $ruta = $_GET['id'];
        header('Content-type: application/pdf');
    // It will be called downloaded.pdf
        header('Content-Disposition: attachment; filename="'.$_GET['nombre'].'.pdf"');
    // The PDF source is in original.pdf
         readfile($ruta);



}