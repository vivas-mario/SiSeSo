<?php
 
require_once('class.ezpdf.php');
 
$pdf = new Cezpdf('LETTER','landscape');
$pdf->selectFont('fonts/Courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5); 
 
     
$conexion= mysql_connect("localhost","root","root") 
or die(mysql_error());
mysql_select_db("socios",$conexion) or die(mysql_error());
         
$resEmp= "";
$titles= "";
$pdf->ezImage('DECAM.jpg',0, 50, 'none', 'left',array('color'=>'black'));
$txttit="";

$resEmp = mysql_query("SELECT empresa, nombre, sexo, curso, fecha, horas, apoyo, mensaje FROM  tabla_curso ") or die(mysql_error());
$txttit = "informe generado por decam su mal uso causara sanciones \n";
$titles = array(

                         
'empresa'=>'<b>empresa</b>',
'nombre'=>'<b>nombre del asistente</b>',
'sexo'=>'<b>sexo ción</b>',
'curso'=>'<b>Nombre del curso</b>',
'fecha'=>'<b>fecha</b>',
'horas'=>'<b>duracion</b>',
'apoyo' => '<b>apoyo</b>',
'mensaje' => '<b>tipo de apoyo</b>',)

;


 
$pdf->ezText("<b>RELACION DE CURSOS</b>\n",16);
$pdf->ezText("Decam Campeche\n",12,array('justification'=>'center'));

$pdf->ezTable($data,$titles,'',$options );

                    
 
$totEmp = mysql_num_rows($resEmp); 
 
$ixx = 0;
 
while($datatmp = mysql_fetch_assoc($resEmp)) { 
$ixx = $ixx+1;
$data[] = array_merge($datatmp, array('num'=>$ixx));
}
 
$options = array(
'shadeCol'=>array(0.9,0.9,0.9),
'width'=>730
); 
 
$pdf->ezText($txttit, 9);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 7);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 7);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 7);
$pdf->ezStream(); 

?>
