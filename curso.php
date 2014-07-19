<?php 
$empresa =$_POST['organismo'];
$nombre=$_POST['nombre'];
$sexo =$_POST['sexo'];
$curso = $_POST['curso'];
$fecha=$_POST['fecha'];
$horas =$_POST['horas'];
$apoyo =$_POST['apoyo'];
$mensaje =$_POST['mensaje'];



$conexion=mysql_connect('localhost','root','root')
  or die("Problemas en la conexion");
mysql_select_db("socios",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("INSERT INTO tabla_curso(empresa,nombre,sexo,curso,fecha,horas,apoyo,mensaje) 
	values('$empresa','$nombre','$sexo','$curso','$fecha','$horas','$apoyo','$mensaje')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "los datos se guardaron correctamente";
 ?>

 <html>
<head>
<script>
var url="/bootstrap/form.php"
function redirecionar(){
	location.href=url
}
setTimeout("redirecionar()",1000);
	</script>
</head>
<title></title>
<body></body>
</html>
	
