<?php
session_start();

if(isset($_SESSION['k_username'])){
    
echo "sesion correcta";

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

</style>
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
<body>
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
                        <li class="active"><a href="inicio.php"></a> </li>
                        <li ><a href="formularios.php">Formularios</a> </li>
                        <li ><a href="reportes.php">Reportes</a> </li>
                        <li ><a href="socio.php">Socios</a> </li>

						
					</ul>
				</div>	
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
<br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php

echo '<a href="index.php" class="btn btn-danger btn-mini" title="cerrar sesión"><i class="icon-white icon-off"></i> cerrar sesión </a>';
?></center>

<center>
	<form class="contact_form" action="asesoria.php" method="post">
    <ul>
        <li>
             <h2>Asesorias </h2>
        </li>
        <li>
            <label for="name">Empresa:</label>
            <?php
$conexion = mysql_connect("localhost","root","root");
 $db = mysql_select_db("socios");

$consulta_mysql='select * from empresa';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  
echo "<select name='organismo'>";
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
   

    echo "<option value= '".$fila['organismo']."'>".$fila['organismo']."</option>";
}
echo "</select>";
    ?>
        </li>
        <li>
            <label for="name">numero de participantes:</label>
            <input type="text" name="participantes" placeholder="" required />
        </li>
       
        <li>
            <label for="name">cantidad de hombres:</label>
            <input name="hombres" type="text" required id="curso"  placeholder="" />
        </li>
         <li>
            <label for="name">cantidad de muejeres:</label>
            <input name="mujeres" type="text"  id="curso"  placeholder="" />
        </li>
         <li>
            <label for="name"> fecha de la asesoria:</label>
            <input name="f2" type="date" required id="curso"  placeholder="" />
        </li>
        
        
    </ul>
     <button type="submit" class="btn btn-inverse btn-large"> Guardar</button>
</form>
 
</center>

	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
<?php

} else {
echo "<h2>No Puedes Ver Esta Pagina, Registrate e inicia sesion</h2><br>";
echo "<a href='index.php' >Iniciar Sesion</a><br>";


}
?>