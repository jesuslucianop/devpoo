$(document).ready(function(){
    $(".dte").hide();
// boton Por donde se envia El cierre de Session
$("#btncerrarsession").click(function(){
  

    $.ajax({
        type:"POST",
        data:{btncerrar:$("#btncerrarsession").val()},
        url:"http://localhost/dev/Libreria/Clases/Autenticacion.php",
        success: function(data) {
  
            location.reload();
        }
      });
});
//Boton Para Registrar Usuarios Nuevos
$("#btnregistrar").click(function(){

    $.ajax({
        type:"POST",
        data:{btnregistrar:$("#btnregistrar").val(),nombre:$("#nombrer").val(),usuario:$("#usuarior").val(),password:$("#passwordr").val(),rol:$("#rol").val()},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
            location.reload();
        }
      });
});
//Boton de borrar Usuarios
$(".btnborrar").click(function(){

   



    $.ajax({
        type:"POST",
        data:{btnborrar:$(".btnborrar").val(),id:idautore},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
           console.log(data);
        }
      });
});
//Boton de Agregar Autores Modal
$("#btnagregarautores").click(function(){
   

    $.ajax({
        type:"POST",
        data:{btnagregarautores:$("#btnagregarautores").val(),nombreautor:$("#NombreAutor").val()},
        url:"http://localhost/dev/Libreria/Clases/Autores.php",
        success: function(data) {
            location.reload();
        }
      });
});
//Boton de Exportar a texto plano
$(".btntext").click(function(){
    
    var url = $(this).attr('url');
    var id = $(this).attr('urlid');
    alert(url);
    $.ajax({
        type:"POST",
        data:{etexto:$("#etexto").val(),url:url,id:id},
        url:"http://localhost/dev/Libreria/Clases/prueba.php",
        success: function(data) {
            if(data == 0){
                alert("Este pdf no se puede exportar a texto plano Debido a su formato");
                location.reload();

            }else{
            console.log(data);
            $(".dte").show();
        }
        }
      });
});
//boton Descargar texto plano anteriormente exportado
$(".dte").click(function(){
    console.log("ca");
    var url = $(this).attr('url');
    var id = $(this).attr('urlid');
    alert(url);/*
    $.ajax({
        type:"POST",
        data:{dte:$(".dte").val(),url:url,id:id},
        url:"http://localhost/dev/Libreria/Clases/Prueba.php",
        success: function(data) {
        console.log(data);
        }
      });*/
});
//Boton de Descargar Pdf
$(".btndescargarpdf").click(function(){
    console.log("b");
    var url = $(this).attr('url');
    var id = $(this).attr('urlid');
    alert(url);
    $.ajax({
        type:"POST",
        data:{btndescargarpdf:$("#btndescargarpdf").val(),url:url,id:id},
        url:"http://localhost/dev/Libreria/Clases/prueba.php?btndescargarpdf=1",
        success: function(data) {
         
            console.log(data);
        
        }
      });
});

});