
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	

</head>
<body>

		<form method="POST">
		<h1 class="animate__animated animate__backInLeft">Panel de Alumnos</h1>
		<br>
		<p>Usuario <input type="text" class="input" name="txtusuario" placeholder="Ingresar usuario" required /> </p>
		<br>
		<p>Contraseña<input type="password" class="input" name="txtpassword" placeholder="Ingresar password" required /> </p>
		<input type="submit" name="btningresar" value="Ingresar"/>
		
		</form> 
</body>


<?php

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: pagina.php');
}

if(isset($_POST['btningresar']))
{
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="Fb41809794";
	$dbname="bdtest";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn)
	{
		die("No hay conexión: ".mysqli_connect_error());
	}
	
	$nombre=$_POST['txtusuario'];
	$pass=$_POST['txtpassword'];
	
	$query=mysqli_query($conn,"Select * from login where usuario = '".$nombre."' and password = '".$pass."'");
	$nr=mysqli_num_rows($query);
	
	if(!isset($_SESSION['nombredelusuario']))
	{
	if($nr == 1)
	{
		$_SESSION['nombredelusuario']=$nombre;
		header("location: pagina.php");
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= 'index.php' </script>";
	}
	}
}
?>