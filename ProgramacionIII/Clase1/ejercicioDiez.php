<?php

/* 
Ezequiel Perez ejercicio 10
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays. */

$lapicera = array("color" => "rojo","marca" => "vic", "trazo" => "fino", "precio" => 50);
$lapiceraDos = array("color" => "azul","marca" => "faber castell", "trazo" => "ultra fino", "precio" => 70);
$lapiceraTres = array("color" => "negra","marca" => "vic", "trazo" => "grueso", "precio" => 80);

$arrayIndex = array($lapicera,$lapiceraDos,$lapiceraTres);

foreach ($arrayIndex as $lapicera)
{
    echo "Lapicera: Color: $lapicera[color], Marca: $lapicera[marca], Trazo: $lapicera[trazo], Precio: $lapicera[precio]<br>";
}


?>