$(document).ready(function(){


 
          $.ajax({
              type:"POST",
              data:{tbl:$("#tbl").val()},
              url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
              success: function(data) {
             
 // console.log(data);
  console.log(JSON.stringify(data)['nombre']);
              }
            });
  });
