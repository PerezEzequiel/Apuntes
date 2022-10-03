<?php

$resultado=1;
$contadorSumas=0;

for($i=2;;$i++)
{  
    if($i+$resultado >= 1000)
    {
        break;
    }
    else
    {
        echo "Numeros sumados $resultado + $i = ";
       $resultado = $i + $resultado;
       echo "$resultado <br>";
       $contadorSumas++;
    }
}

echo "Se realizo $contadorSumas operacion/es";

?>