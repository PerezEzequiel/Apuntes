<?php

$a = 1;
$b = 5;
$c = 1;
$aux;

$array = array($a,$b,$c);

if($a == $b || $a == $c || $b == $c)
{
    echo "No hay valor del medio";
}
else
{
    for($i=0;$i<count($array)-1;$i++)
    {
        for($j=$i+1;$j<count($array);$j++)
        {
            if($array[$i] > $array[$j])
            {
                $aux = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $aux;
            }
        }
    }
    echo "El valor del medio es $array[1]";
}

?>