<?php
include "Header.php";

echo "Nombre: ". $_POST["nombre"]; 
echo "<br>Apellidos: ". $_POST["apellidos"]; 
echo "<br>E-mail: ". $_POST ["cerveza"]; 
?>








<form action="" method="POST">   
Nombre: <input type="text" name="nombre"><br>   
Apellidos: <input type="text" name="apellidos"><br>   
Email: <input type="text" name="email"> <br>   
Cerveza: <br>   
<select multiple name="cerveza">    
<option value="SanMiguel">San Miguel</option>    
<option value="Mahou">Mahou</option>    
<option value="Heineken">Heineken</option>    
<option value="Carlsberg">Carlsberg</option>    
<option value="Aguila">Aguila</option>   
...   
</select><br>   
<input type="submit" value="Enviar datos!" > 
</form>



<?php
include "Footer.php";
?>