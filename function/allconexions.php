<?php
    
function allConexiions()
{
    $mysqli =  getConnexion();
    $con=mysqli_connect($host,$user,$pw,$db)or die("Problemas al conectar");
    $query = 'SELECT * FROM `actividades` ORDER BY `actividades`.`id` ASC'
    

return $mysqli->query($query);
}

?>
