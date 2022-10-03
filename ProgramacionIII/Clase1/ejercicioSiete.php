<?php


$array=[];
$contadorImpar=0;
$contador = 0;

for($i=0;;$i++)
{
    if($contadorImpar == 10)
    {
        break;
    }
    else
    {
        if($i%2!=0)
        {
            array_push($array,$i);
            $contadorImpar++;
        }
    }
}

echo "Estructura repetitiva for <br>";
for($i=0;$i<count($array);$i++)
{
    echo "$array[$i]<br>";
}

echo "Estructura repetitiva foreach <br>";
foreach($array as $valor)
{
    echo "$valor<br>";
}

echo "Estructura repetitiva while <br>";

while($contador != count($array))
{
    echo "$array[$contador]<br>";
    $contador++;
}

?>