<?php

$mysqli = new Mysqli('localhost', 'root', 'hola', 'alt');
$mysqli->set_charset("utf8");

$t=mysqli_query($mysqli, "SELECT HOUR(SUM(TIMEDIFF(salida_almuerzo, regreso_almuerzo))) FROM actividades WHERE id=3 ");	

while($f = $t->fetch_array()){
    echo $f[0] ;
    echo "horas almuerzo";
       
}

?>


