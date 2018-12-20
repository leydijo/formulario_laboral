<?php

$mysqli = new Mysqli('localhost', 'root', 'S0p0rt32019', 'alt');
$mysqli->set_charset("utf8");

$t=mysqli_query($mysqli, "SELECT HOUR(SUM(TIMEDIFF(salida_almuerzo, regreso_almuerzo))) FROM actividades  ");	

while($f = $t->fetch_array()){
    echo $f[0] ;
    echo "horas almuerzo";
       
}

?>


