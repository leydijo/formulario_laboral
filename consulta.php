 <?php
include('inicio.php');// CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Mes_Laboral.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS las columnas del excel
	fputcsv($salida, array('Identificador', 'Nombre', 'Apellido', 'Cliente','ingreso','egreso','totalhoras','total'));
	// QUERY PARA CREAR EL REPORTE
	$sumaCsv=$conexion->query("SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(totalhoras))) AS hours FROM actividades WHERE (nombre = '$nombre')AND(apellido = '$apellido')");
	$reporteCsv=$conexion->query("SELECT * FROM actividades WHERE (nombre = '$nombre')AND(apellido = '$apellido') ORDER BY id ");
	
	while($filaR=$reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['id'], 
								$filaR['nombre'],
								$filaR['apellido'],
								$filaR['cliente'],
								$filaR['ingreso'],
								$filaR['egreso'],
								$filaR['totalhoras'],
								$filaR['hours']));
							
}


?>



