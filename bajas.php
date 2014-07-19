<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>

    <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title>Sistema para socios</title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" media="screen" href="styles.css" >
    </head>
<body>

<?php

$id =$_GET['id'];
$conexion= mysql_connect("localhost","root","root");
mysql_select_db("socios");


$sql="DELETE FROM empresa WHERE id='$id'";
mysql_query($sql,$conexion);
?>

<center><h2>EL REGISTRO SE ELIMINO DE MANERA EXITOSA DE LA BASE DE DATOS<h2>

<img src="borrar.jpg" width= '200px' heigth= '200px'></center>

 <script type="text/javascript" src="js/bootstrap.js"></script>




</body>
</html>

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