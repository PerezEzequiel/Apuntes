<?php

require_once "./ejercicio_17.php"; 

// ● Crear dos objetos “Auto” de la misma marca y distinto color.
// ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
// ● Crear un objeto “Auto” utilizando la sobrecarga restante.
// ● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
// al atributo precio.
// ● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
// resultado obtenido.
// ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
// no.
// ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
// 5)

/*$autoUno = new Auto("rojo","fiat");
$autoDos = new Auto("blanco","fiat");

$autoTres = new Auto("negro","vw",1000);
$autoCuatro = new Auto("negro","vw",1500);

$autoCinco = new Auto("amarillo","ford",1600,date('8/5/2019'));

echo "Agrego impuesto y muestro<br>";
$autoTres->AgregarImpuestos(1500);
$autoCuatro->AgregarImpuestos(1500);
$autoCinco->AgregarImpuestos(1500);

Auto::MostrarAuto($autoTres);
echo "<br>";
Auto::MostrarAuto($autoCuatro);
echo "<br>";
Auto::MostrarAuto($autoCinco);
echo "<br>";

$importeSumado = Auto::Add($autoUno,$autoDos);
echo "El importe sumado del auto nro 1 y nro 2 es = $importeSumado<br>";

if($autoUno->Equals($autoDos) && $autoUno->Equals($autoCinco))
{
    echo "Los autos 1,2 y 5 son iguales<br>";
}
else
{
    echo "Los autos 1,2 y 5 son diferentes<br>";
}

echo "Muestro los autos impares<br>";

Auto::MostrarAuto($autoUno);
echo "<br>";
Auto::MostrarAuto($autoTres);
echo "<br>";
Auto::MostrarAuto($autoCinco);
echo "<br>";


*/


/*
Auto::alta($autoUno);
Auto::alta($autoDos);
Auto::alta($autoTres);
Auto::alta($autoCuatro);
Auto::leerArchivo("./altas.csv");
*/

$array = Auto::leerYcargar("./altas.csv");

//echo "Muestro array<br>";
Auto::MostrarAutos($array);




?>