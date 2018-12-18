 <?php
include('inicio.php');// CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$nombre=$_POST['nombre1'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Mes_Laboral.csv"');
	

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS las columnas del excel
	fputcsv($salida, array('Identificador', 'Nombre', 'Apellido', 'Cliente'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conexion->query("SELECT *  FROM actividades where fecha_registro BETWEEN '$fecha1' AND '$fecha2'  ORDER BY id");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['id'], 
								$filaR['nombre'],
								$filaR['apellido'],
								$filaR['cliente']));

}








// incluir la libreria de php
//  require 'Classes/PHPExcel.php';
//  require 'conexion.php';

// $sql = "SELECT  id, nombre, apellido, cliente FROM actividades";
// $resultado = $mysqli->query($sql);

// $fila= 5;

// $objPHPExcel = new PHPExcel ();
// $objPHPExcel->getProperties ()->setCreator ("codigos de programacion")->setDescription("Reporte de productos");

// crear pestañas de excel
// $objPHPExcel->setActiveSheetIndex(0);
// $objPHPExcel->getActiveSheet()->setTitle("Labores");

// Iniciar los encabezados
// $objPHPExcel->getActiveSheet()->setCellValue('A1','ID');
// $objPHPExcel->getActiveSheet()->setCellValue('B1','NOMBRE');
// $objPHPExcel->getActiveSheet()->setCellValue('C1','APELLIDO');
// $objPHPExcel->getActiveSheet()->setCellValue('D1','CLIENTE');


// while($row = $resultado->fetch_assoc())
// {
//     $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
//     $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['nombre']);
//     $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['apellido']);
//     $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cliente']);

//     $fila++;
// }

// header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
// header('Content-Disposition: attachment;filename="Poductos.xlsx"');
// header('Cache-Control: max-age=0');

// $obWriter = new PHPExcel_Writer_Excel2010($objPHPExcel);
// $objWriter->save ('php://output');

?>



