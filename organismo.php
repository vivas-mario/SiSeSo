<?php 
$organismo =$_POST['organismo'];
$contacto=$_POST['contacto'];
$correo =$_POST['correo'];
$telefono = $_POST['telefono'];





$conexion=mysql_connect('localhost','root','root')
  or die("Problemas en la conexion");
mysql_select_db("socios",$conexion) or
  die("Problemas en la seleccion de la base de datos");
  //aca we va poner lo del utf 8
mysql_query("INSERT INTO empresa(organismo,contacto,correo,telefono) 
	values('$organismo','$contacto','$correo','$telefono')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "los datos se guardaron correctamente";
 ?>

  <html>
<head>
<script>
var url="/bootstrap/organismos-form.php"
function redirecionar(){
	location.href=url
}
setTimeout("redirecionar()",1000);
	</script>
</head>
<title></title>
<body></body>
</html>