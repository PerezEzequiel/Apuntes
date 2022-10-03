<?php

$operador = '-';
$op1 = 5;
$op2 = 3;
$resultado=0;

switch($operador)
{
    case '+':
    $resultado = $op1 + $op2;
        break;
    case '-':
    $resultado = $op1 - $op2;
        break;
    case '/':
    $resultado = $op1 / $op2;
        break;
    case '*':
    $resultado = $op1 * $op2;
        break;
}

echo "El resultado de $op1 $operador $op2 es $resultado";

?>