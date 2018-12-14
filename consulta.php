<?php
//incluir la libreria de php
 require 'Classes/PHPExcel.php';
 require 'conexion.php';



 

$sql = "SELECT  id, nombre, apellido, cliente FROM actividades";
$resultado = $mysqli->query($sql);

$fila= 5;

$objPHPExcel = new PHPExcel ();
$objPHPExcel->getProperties ()->setCreator ("codigos de programacion")->setDescription("Reporte de productos");

//crear pestañas de excel
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Labores");

//Iniciar los encabezados
$objPHPExcel->getActiveSheet()->setCellValue('A1','ID');
$objPHPExcel->getActiveSheet()->setCellValue('B1','NOMBRE');
$objPHPExcel->getActiveSheet()->setCellValue('C1','APELLIDO');
$objPHPExcel->getActiveSheet()->setCellValue('D1','CLIENTE');


while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['nombre']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['apellido']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cliente']);

    $fila++;
}

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="Poductos.xlsx"');
header('Cache-Control: max-age=0');

$obWriter = new PHPExcel_Writer_Excel2010($objPHPExcel);
$objWriter->save ('php://output');

?>


