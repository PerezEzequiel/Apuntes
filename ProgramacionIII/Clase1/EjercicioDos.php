<?php

echo date("l");
echo "<br>";
echo date("m.d.y");
echo "<br>";
echo date("Y/m/d");
echo "<br>";
echo date(date("H:i:s"));
echo "<br>";
$dia = date("j");
$mes = date("n");
$estacion;

switch($mes)
{
    case "3":
        if($dia <= 20)
        {
            $estacion = "Verano";
        }
        else
        {
            $estacion = "Otoño";
        }
        break;
    case "4":
        $estacion = "Otoño";
        break; 
    case "5":
        $estacion = "Otoño";
        break;
    case "6":
        if($dia <= 20)
        {
            $estacion = "Otoño";
        }
        else
        {
            $estacion = "Invierno";
        }
        break;
    case "7":
        $estacion = "Invierno";
        break;
    case "8":
        $estacion = "Invierno";
        break;
    case "9":
        if($dia <= 20)
        {
            $estacion = "Invierno";
        }
        else
        {
            $estacion = "Primavera";
        }
        break;
    default:
        $estacion = "Primavera";

}

echo $estacion;

?>