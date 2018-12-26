 <?php
include('inicio.php');// CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$client=$_POST['cliente'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Mes_Laboral.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS las columnas del excel
	fputcsv($salida, array('Identificador', 'Nombre', 'Apellido', 'Cliente','ingreso','egreso','totalhoras'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conexion->query("SELECT * FROM actividades where fecha_registro BETWEEN '$fecha1' AND '$fecha2'  ORDER BY id ");
	

	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['id'], 
								$filaR['nombre'],
								$filaR['apellido'],
								$filaR['cliente'],
								$filaR['ingreso'],
								$filaR['egreso'],
								$filaR['totalhoras']));
}


?>



