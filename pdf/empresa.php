<?php
 
require_once('class.ezpdf.php');
 
$pdf =& new Cezpdf('LETTER','landscape');
$pdf->selectFont('fonts/Courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5); 
 
     
$conexion= mysql_connect("localhost","root","root") 
or die(mysql_error());
mysql_select_db("socios",$conexion) or die(mysql_error());
         
$resEmp= "";
$titles= "";
$pdf->ezImage('DECAM.jpg',0, 50, 'none', 'left',array('color'=>'black'));
$txttit="";    
$resEmp = mysql_query("SELECT organismo, contacto, correo, telefono  FROM  empresa ") or die(mysql_error());
$txttit = "informe generado por decam su mal uso causara sanciones \n";
$titles = array(

                         
'organismo'=>'<b>Empresa</b>',
'contacto'=>'<b>Contacto</b>',
'correo'=>'<b>Correo</b>',
'telefono'=>'<b>Telefono</b>',)

;



$pdf->ezText("<b>RELACION SOCIOS ACTIVOS</b>\n",16);
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
'xOrientation'=>'center',
'width'=>700
); 
 
$pdf->ezText($txttit, 9);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 7);
$pdf->ezText("<b>:</b> ", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 7);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 7);
$pdf->ezStream(); 

?>
