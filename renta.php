<?php 
$e1 =$_POST['organismo'];
$f1 =$_POST['f1'];
$ho1 =$_POST['ho1'];
$c1 = $_POST['c1'];
$h1 =$_POST['h1'];
$montaje =$_POST['montaje'];
$a1 =$_POST['a1'];
$m1 =$_POST['m1'];



$conexion=mysql_connect('localhost','root','root')
  or die("Problemas en la conexion");
mysql_select_db("socios",$conexion) or
  die("Problemas en la seleccion de la base de datos");
  mysql_query("SET NAMES 'utf8'");
mysql_query("INSERT INTO tabla_renta(e1,f1,ho1,c1,h1,montaje,a1,m1) 
	values('$e1','$f1','$ho1','$c1','$h1','$montaje','$a1','$m1')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "los datos se guardaron correctamente";
 ?>

  <html>
<head>
<script>
var url="/bootstrap/form-renta.php"
function redirecionar(){
	location.href=url
}
setTimeout("redirecionar()",1000);
	</script>
</head>
<title></title>
<body></body>
</html>