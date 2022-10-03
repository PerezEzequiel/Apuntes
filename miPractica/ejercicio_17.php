<?php

/*
Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:

_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
*/

class Auto
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($color, $marca,$precio = 0,$fecha = "")
    {
        $this->_color = $color;
        $this->_marca = $marca;
        $this->_precio = $precio;
        if (!isset($fecha)) {
            $fecha = date("d/m/y");
        }else{
            $this->_fecha = $fecha;
        }
        
    }

    public function AgregarImpuestos($precioParametro)
    {
        $this->_precio += $precioParametro;
    }
    public static function MostrarAuto($autoRecibido)
    {
        $formatoString = "$autoRecibido->_color,$autoRecibido->_precio,$autoRecibido->_marca,$autoRecibido->_fecha";
        echo $formatoString;
        return $formatoString;
    }

    public static function MostrarAutos($listaRecibida)
    {
        foreach ($listaRecibida as $auto) {
            Auto::MostrarAuto($auto);
            echo "<br>";
        }
    }

    public function Equals($autoRecibido)
    {
        $retorno = false;

        if ($this->_marca == $autoRecibido->_marca) {
            $retorno = true;
        }
        return $retorno;
    }

    public static function Add($autoUno, $autoDos)
    {
        $retorno = 0;
        if ($autoUno->Equals($autoDos) && $autoUno->_color == $autoDos->_color) {
            $retorno = $autoUno->_precio + $autoDos->_precio;
        } else {
            echo "Los autos tienen diferente color y/o marca<br>";
        }

        return $retorno;
    }

    public static function alta($autoRecibido)
    {
        $archivo = fopen("./altas.csv", "a");

        if ($archivo == null) {
            return "error";
        }

        if (fwrite($archivo, Auto::MostrarAuto($autoRecibido) . "\r\n") > 0) {
            echo "<h2>Dado de alta exitosamente</h2>";
        }

        fclose($archivo);
    }
    public static  function leerArchivo($path)
    {
        $archivo = fopen($path, "r");

        if ($archivo != null) {
            while (!feof($archivo)) {
                echo fread($archivo, filesize($path));
            }
        }

        fclose($archivo);
    }
    public static function leerYcargar($path)
    {
        $archivo = fopen($path, "r");
        $lineaLeida = "";
        $arrayLinea = array();
        $arrayRetorno = array();
        $objeto = null;

        if ($archivo == null) {
            return null;
        }

        while (!feof($archivo)) {
            $lineaLeida = fgets($archivo);
            $arrayLinea = explode(",", $lineaLeida);

            if ($arrayLinea[0] != "") {
                $objeto = new Auto($arrayLinea[0], $arrayLinea[1], $arrayLinea[2],$arrayLinea[3]);
                array_push($arrayRetorno, $objeto);
            }
        }

        fclose($archivo);

        return $arrayRetorno;
    }
}
