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
                        <li class="active"><a href="index.php"></a> </li>
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
    <form class="contact_form" action="organismo.php" method="post">
    <ul>
        <li>

             <h2>SOCIOS</h2>

        </li>
        <li>
            <label for="name">Empresa:</label>
            <input name="organismo" type="text" required id="empresa"  placeholder="" />
        </li>
         <li>
            <label for="name">nombre del contacto:</label>
            <input name="contacto" type="text"  id="empresa"  placeholder="" />
        </li>
         <li>
            <label for="name">Correo Electronico:</label>
            <input type="email" name="correo"  id="empresa"  placeholder="" />
        </li>
         <li>
            <label for="name">Telefono:</label>
            <input name="telefono" type="text"   id="empresa"  placeholder="" />
        
    <BR>
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



