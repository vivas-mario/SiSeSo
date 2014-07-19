<?php
session_start();

if(isset($_SESSION['k_username'])){
	$perfil =  $_SESSION['perfil'];
?>
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
<style type="text/css">
body {
background: url() no-repeat center center ;
background-size: 200px auto;
margin:0;
color:#000;
font:x-small Georgia Serif;
font-size/* */:/**/small;
font-size: /**/small;
text-align: ;
}
</style>
</head>
<body >


	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner" >
			<div class="container">
				<a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar" href="inicio.php"> reg1 </span>
					<span class="icon-bar">reg2</span>
					<span class="icon-bar">re4</span>
				</a>
				<a href="inicio.php" class="brand">DECAM</a>
				<div class="nav-collapse">
					<ul class="nav">

						<li ><a href="inicio.php">Página Principal</a> </li>
						<li class="active"><a href="index.php"></a> </li>
						<li ><a href="formularios.php">Formularios</a> </li>
						<li ><a href="reportes.php">Reportes</a> </li>
						<li ><a href="socio.php">Socios</a> </li>
						
					<?php

					?>
						
					</ul>
				</div>	
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>

<?php

if (isset($_SESSION['k_username'])) {
	echo '<h1> Bienvenido &nbsp;'.$_SESSION['k_username'].'</h1>.';

}
?>
<center><img src="DECAM.jpg"></center>
<br>
<br>
<br>
<br>
<center>
	<br>
	
	
<a href="formularios.php" class="btn btn-inverse btn-large" style='width:350px; height:50px'><i class="icon-white icon-folder-open "></i> <FONT FACE="arial" SIZE=5 COLOR=white>Captura De Actividades</FONT></a> &nbsp;&nbsp;&nbsp;
<a href="reportes.php" class="btn btn-inverse btn-large"style='width:350px; height:50px'><i class="icon-white icon-list-alt"></i> <FONT FACE="arial" SIZE=5 COLOR=white>Reportes De Los Registros </FONT></a><br>
<br><a href="socio.php" class="btn btn-inverse btn-large"style='width:350px; height:50px'><i class="icon-white icon-list-alt"></i> <FONT FACE="arial" SIZE=5 COLOR=white>Socios </FONT></a>
</center>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

</body>

</html>

<?php

echo '<a href="index.php" class="btn btn-danger btn-mini" title="cerrar sesión"><i class="icon-white icon-off"></i> cerrar sesión </a>';


} else {
echo "<h2>No Puedes Ver Esta Pagina, Registrate e inicia sesion</h2><br>";
echo "<a href='index.php' >Iniciar Sesion</a><br>";


}
?>