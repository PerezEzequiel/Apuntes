<?php

/*
Ezequiel Perez ejercicio 9
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/


$lapicera = array("color" => "rojo","marca" => "vic", "trazo" => "fino", "precio" => 50);
$lapiceraDos = array("color" => "azul","marca" => "faber castell", "trazo" => "ultra fino", "precio" => 70);
$lapiceraTres = array("color" => "negra","marca" => "vic", "trazo" => "grueso", "precio" => 80);

echo "Lapicera 1<br>";
foreach($lapicera as $key => $value)
{
    echo "$key = $value<br>";
}

echo "Lapicera 2<br>";
foreach($lapiceraDos as $key => $value)
{
    echo "$key = $value<br>";
}


echo "Lapicera 3<br>";
foreach($lapiceraTres as $key => $value)
{
    echo "$key = $value<br>";
}

?>