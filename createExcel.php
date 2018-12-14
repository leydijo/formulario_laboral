<?php 
require_once 'function/excel.php';

activeErrorReporting();
noCli();
require_once 'Classes/PHPExcel.php';
require_once 'function/conexion.php';

$objPHPExcel = new PHPExcel();
// Set document properties
$objPHPExcel->getProperties()->setCreator("leydi")
               ->setLastModifiedBy("Maarten Balliauw")
               ->setTitle("Office 2010 XLSX Test Document")
               ->setSubject("Office 2010 XLSX Test Document")
               ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
               ->setKeywords("office 2010 openxml php")
               ->setCategory("Test result file");
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')
                                          ->setSize(10);            
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'NOMBRE')
            ->setCellValue('C1', 'APELLIDO')
            ->setCellValue('D1', 'CLIENTE');
$informe = getAllListsAndVideos();
$i = 2;
// while($row = $informe->fetch_array(MYSQLI_ASSOC))
// {
// $objPHPExcel->setActiveSheetIndex(0)
//             ->setCellValue("A$i", $row['id'])
//             ->setCellValue("B$i", $row['nombre'])
//             ->setCellValue("C$i", $row['apellido'])
//             ->setCellValue("D$i", $row['cliente']);
// $i++;
// }

while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->setActiveSheetIndex(0)
 
    $objPHPExcel->setActiveSheetIndex(0)   
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['nombre']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['apellido']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cliente']);

    $fila++;
}

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setTitle('Informe de vídeos');
$objPHPExcel->setActiveSheetIndex(0);
getHeaders();
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2010');
$objWriter->save('php://output');
exit;