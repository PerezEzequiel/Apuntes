<?php


require_once "./Usuario.php";

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "sinnombre";
$clave = isset($_POST["clave"]) ? $_POST["clave"] : "sinclave";
$mail = isset($_POST["mail"]) ? $_POST["mail"] : "sinmail";
$imagen = isset($_POST["imagen"]) ? $_POST["imagen"] : "sinmail";


$usuario = new Usuario($nombre,$clave,$mail,$imagen);




$array = Usuario::Leer();


echo "<h2>" .Usuario::verificarUsuario($array,$usuario) . "</h2>";



?>