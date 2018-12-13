<?php
	include("inicio.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['proyecto']) && 
     !empty($_POST['proyecto'])){
        
        
	
    $con=mysqli_connect($host,$user,$pw,$db)or die("Problemas al conectar");
    // mysqli_select_db($db, $con) or die("Problemas al conectar la bd");

    // mysqli_query("INSERT INTO consultores (NOMBRE) VALUES ('$_POST[nombre]')",$con);
    //  mysqli_query($con,"INSERT INTO alt.consultores VALUES (NOMBRE,PROYETO) = ('$name','$proyect')");
    mysqli_query($con,"INSERT INTO alt.consultores SET NOMBRE = ('$_POST[nombre]'),PROYETO = ('$_POST[proyecto]')");
    
    echo "datos insertado";
    
	}else {
	  echo "no se ha podido guardar los adatos";
	}
?>



