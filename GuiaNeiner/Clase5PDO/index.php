<?php

require_once "../../27/accesoDatos.php";
require_once "./usuario.php";

$bsd = AccesoDatos::realizarConexion("tp", "root", "");
$id;
$sentencia = $bsd->prepare("SELECT * from usuarios WHERE id = 102");
$sentencia->bindColumn(2,$id,PDO::PARAM_STR);
$sentencia->execute();
echo $sentencia->rowCount() . "<br>";

while($file = $sentencia->fetch(PDO::FETCH_BOUND)){

}


echo $id;