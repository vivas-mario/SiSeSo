<?php
 $conexion = mysql_connect ("localhost", "root", "root");
 mysql_select_db ("socios", $conexion);    

 // MODIFICA LA CONSULTA QUE DESEES
 $sql = "SELECT * FROM empresa ORDER BY organismo ASC";

 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
  
 if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
    
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("ingenieroweb.com.co")
        ->setLastModifiedBy("ingenieroweb.com.co")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("ingenieroweb.com.co  con  phpexcel")
        ->setCategory("ciudades");   
 
   $i = 1;
   while ($registro = mysql_fetch_object ($resultado)) {
      
      // aca se agregan los campos 
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $registro->organismo);
      $i++;

      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B'.$i, $registro->contacto);
      $i++;

      //
       
   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ejemplo_MARIO.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
mysql_close ();
?>