<?php
//conectar a la db

$conectar=@mysql_connect('localhost','$root','');
//verificar la conexion

if(!$conectar){
	echo "NO se pudo conectar con el servidor";
}else{
	$base=mysql_select_db('consultor');
	if(!$base){
		echo"No Se Encontro La Base De Datos";	
	}
}
//recuperar variables
 $nombre = $_POST['name'];
//  $Ingreso = $_POST['hora'];
//  $Salida_Almuerzo = $_POST['exit'];

$sql="INSERT INTO consultor VALUES('$nombre')";

//ejecutamos la setencia sql
$ejecutar=mysql_query($sql);
if(!$ejecutar){
	echo"hubo un error";
}else{
	echo "consultor guardados correctamente<a href='index.html'>Volver</a>";
}
?>

// $cliente = $_POST['company'];
// $tareas = $_POST['homework'];
// $descrition = $_POST['descr'];
//$ingreso = $_POST['hora'];
// $salida = $_POST['exit'];
// $regreso = $_POST['regreso'];
// $egreso = $_POST['egreso'];
// $fecha = month ();
// //$fechaFormateada = date"j/n/Y", $fecha;


// echo $nombre, "msj;", $tareas;

// if(mail('leydilenis85@gmail.com' $nombre, $cliente)){
// 	echo "mail enviado";
// }else{
// 	echo "no enviado"
// }