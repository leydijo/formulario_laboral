<?php
	include("inicio.php");
  if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['lastname']) && !empty($_POST['lastname'])
  && isset($_POST['cliente']) && !empty($_POST['cliente']) && isset($_POST['fecha']) && !empty($_POST['fecha'])
  && isset($_POST['homework']) && !empty($_POST['homework']) && isset($_POST['descripcion']) && !empty($_POST['descripcion'])
  && isset($_POST['ingreso']) && !empty($_POST['ingreso'])  && isset($_POST['exit']) && !empty($_POST['exit'])
  && isset($_POST['regreso']) && !empty($_POST['regreso'])  && isset($_POST['egreso']) && !empty($_POST['egreso'])
  ){

    $con=mysqli_connect($host,$user,$pw,$db)or die("Problemas al conectar");

    mysqli_query($con, "INSERT INTO alt.actividades SET nombre = ('$_POST[nombre]') , apellido = ('$_POST[lastname]'), 
    cliente =('$_POST[cliente]'),
    fecha_registro = ('$_POST[fecha]'), tareas_realizadas = ('$_POST[homework]'), descripcion = ('$_POST[descripcion]'), 
    ingreso = ('$_POST[ingreso]'), salida_almuerzo =('$_POST[exit]'), regreso_almuerzo = ('$_POST[regreso]'), 
    egreso = ('$_POST[egreso]'),totalhoras = TIMEDIFF(('$_POST[egreso]'),('$_POST[ingreso]'))");
    
    echo "datos insertado";

   
         
  }else {
	  echo "no se ha podido guardar los datos";
  }
 
?>
 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
  <a href=index.html>Home!</a>
  </body>
  </html>