<?php 
$e2 =$_POST['organismo'];
$participantes=$_POST['participantes'];
$hombres =$_POST['hombres'];
$mujeres = $_POST['mujeres'];
$f2=$_POST['f2'];




$conexion=mysql_connect('localhost','root','root')
  or die("Problemas en la conexion");
mysql_select_db("socios",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("INSERT INTO tabla_asesoria(e2,participantes,hombres,mujeres,f2) 
	values('$e2','$participantes','$hombres','$mujeres','$f2')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "los datos se guardaron correctamente";
 ?>

 <html>
<head>
<script>
var url="/bootstrap/asesoria-form.php"
function redirecionar(){
	location.href=url
}
setTimeout("redirecionar()",1000);
	</script>
</head>
<title></title>
<body></body>
</html>