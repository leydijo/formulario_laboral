<?php
    include_once("inicio.php");
    $id = 3; 

    $query_tb = "SELECT nombre, apellido FROM actividades where id ='$id";
    $recupero1 = mysql_query($query_tb, $conexion_db) or die(mysql_error()); 
    $recupero2 = mysql_query($query_tb, $conexion_db) or die(mysql_error()); 

    $rec_nombre="";  
    while ($row_tb=mysql_fetch_assoc($recupero1)) 
    {  
    $rec_nombre = ($row_tb['nombre']."");  
    } 
    echo "$rec_nombre <br>"; 
//------------------------------------
$rec_apellido="";  
while ($row_tb=mysql_fetch_assoc($recupero2)) 
{  
$rec_apellido = ($row_tb['apellido']."");  
} 
echo "$rec_apellido <br>"; 



?>


