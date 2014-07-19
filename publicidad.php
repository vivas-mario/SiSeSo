<?php 
$procedencia =$_POST['procedencia'];
$espacio=$_POST['espacio'];
$tiempo =$_POST['tiempo'];
$contenido = $_POST['contenido'];





$conexion=mysql_connect('localhost','root','root')
  or die("Problemas en la conexion");
mysql_select_db("socios",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("INSERT INTO tabla_publicidad(procedencia,espacio,tiempo,contenido) 
	values('$procedencia','$espacio','$tiempo','$contenido')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "los datos se guardaron correctamente";
 ?>

  <html>
<head>
<script>
var url="/bootstrap/publicidad-form.php"
function redirecionar(){
	location.href=url
}
setTimeout("redirecionar()",1000);
	</script>
</head>
<title></title>
<body></body>
</html>