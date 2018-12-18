<?
$host = "localhost";
$user = "root";
$pw = "S0p0rt32019";
$db = "alt";


$conexion= new mysqli($host, $user, $pw, $db);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
?>

