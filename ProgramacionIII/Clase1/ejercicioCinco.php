<?php

#Ezequiel Perez ejercicio 5

/*
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
*/


$num=55;
$numStr;
$arrayNumeros = array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
$numeroEnPalabras;

if($num > 20 && $num < 60)
{
    $numStr = (String)$num;

    switch ($numStr[0])
    {
        case "2":
            $numeroEnPalabras = "Veinti";
            break;
        case "3":
            $numeroEnPalabras = "Treinta";
            break;
        case "4":
            $numeroEnPalabras = "Cuarenta";
            break;
        case "5":
            $numeroEnPalabras = "Cincuenta";
            break;
    }

    if($numStr[1] != 0)
    {
        for($i=0;$i<count($arrayNumeros);$i++)
        {
            if($numStr[1] == $i)
            {
                if($numStr[0] == 2)
                {
                    $numeroEnPalabras .= $arrayNumeros[$i-1];
                }
                else
                {
                    $numeroEnPalabras = $numeroEnPalabras . " y " .$arrayNumeros[$i-1];
                }
            }
        }
    }
    echo $numeroEnPalabras;
}
else
{
    echo "Rango no valido";
}
?>