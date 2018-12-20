<?php
require 'Classes/PHPExcel.php';
require 'inicio.php';

$sql = "SELECT id, nombre, apellido, cliente FROM actividades";
$resultado = $mysqli->query($sql);//ejecutamos la consulta con mysqli

$fila = 2;

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("leydi")->setDescription("Reporte de Productos");
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("prueba");

//emcabezados
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'APELLIDO');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'INGRESO');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'EGRESO');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'TOTAL');
	
while($row = $resultado->fetch_assoc())
	{
        $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['nombre']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['apellido']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['ingreso']);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['egreso']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, '=D'.$fila.'+E'.$fila);


        $fila++;

        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment;filename="Productos.xlsx"');
        header('Cache-Control: max-age=0');
    $objWriter = new PHPExcel_Writer_Excel2010($objPHPExcel);
	$objWriter->save('php://output');
?>