<?php

session_start();

$usuario = $_POST["txtNombre"];
$password = $_POST["txtPassword"];

try {
    $conexion = "mysql:host=localhost;dbname=prueba";
    $pdo = new PDO($conexion,"root");
} catch (PDOException $ex) {
    echo "error"  . $ex->getMessage();
}

$sentencia = $pdo->prepare("SELECT * FROM `usuarios` where `nombre`='$usuario' AND `password`='$password'");

if ($sentencia->execute() > 0) {
    echo "El usuario existe!";
}
else{
    echo "El usuario no existe";
    //header("localhost/index.php");
}

?>