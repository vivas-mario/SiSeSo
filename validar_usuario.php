<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','root')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('socios')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];


if(trim($usuario) != "" || trim($password) != "" || trim($usuario) == "" || trim($password) == "")
{
	$query = mysql_query('SELECT * FROM usuarios WHERE usuario = "'.$usuario.'" AND password = "'.$password.'" ');
    $num_rows = mysql_num_rows($query); 
    if($num_rows <= 0){
    	echo '<script>alert("Debe especificar un usuario y password validos."); </script>';
        echo '<script>window.location = "index.php"; </script>';
    } else {
        $fetch = mysql_fetch_array($query);
        $_SESSION['k_username']   = $fetch['usuario'];
        $_SESSION['perfil']   = $fetch['perfil'];
        
        $perfil =  $_SESSION['perfil'];

        echo '<script>window.location = "inicio.php"; </script>';

        /*switch ($perfil) {
        	case '1':
        		echo '<script>window.location = "index.php"; </script>';
        		break;

        	case '2':
        		echo '<script>window.location = "index.php"; </script>';
        		break;

        	case '3':
        		echo "revista";
        		break;
        }*/
    }
}else{
	echo 'Debe especificar un usuario y password <br><br><br>';
	echo "<a href='index.php' >Iniciar Sesion</a><br>";
}
mysql_close();
?>
