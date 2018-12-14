<?php
    
function getAllconexions()
{
    $mysqli =  getConnexion();
    $query = "SELECT date, id, nombre, apellido, cliente FROM  actividades";  
    return $mysqli->query($query);
}


?>

