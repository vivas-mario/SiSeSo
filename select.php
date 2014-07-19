<?php
$conexion = mysql_connect("localhost","root","root");
 $db = mysql_select_db("socios");

$consulta_mysql='select * from organismos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  
echo "<select name='select1'>";
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
   
    echo "<option value='".$fila['organismo']."'>".$fila['organismo']."</option>";
}
echo "</select>";
	?>
