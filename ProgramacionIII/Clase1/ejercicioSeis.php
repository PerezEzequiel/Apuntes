<?php


$array = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
$acumulador=0;
$promedio;

foreach($array as $valor)
{
    $acumulador += $valor;
}
$promedio = $acumulador / count($array);

if($promedio > 6)
{
    echo "El promedio es mayor a 6";
}
else if($promedio < 6)
{
    echo "El promedio es menor a 6";
}
else
{
    echo "El promedio es igual a 6";
}



?>