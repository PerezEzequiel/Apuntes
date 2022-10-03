<?php

class Usuario
{
    public $_nombre;
    public $_clave;
    public $_mail;

    public function __construct($nombre, $clave, $mail)
    {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    public function mostrarUsuario()
    {
        return "$this->_nombre,$this->_clave,$this->_mail";
    }

    public function guardarUsuario()
    {
        $archivo = fopen("./usuarios.csv", "a");
        $arrayCsv = array();
        if ($archivo == null) {
            return "error";
        }

        array_push($arrayCsv, $this->_nombre);
        array_push($arrayCsv, $this->_clave);
        array_push($arrayCsv, $this->_mail);
        $arrayCsv = implode(',', $arrayCsv);
        $arrayCsv .= "\n";

        if (fwrite($archivo, $arrayCsv) > 0) {
            echo "<h2>Carga exitosa</h2>";
        }
        fclose($archivo);
    }
    public static function leerUsuarios()
    {
        $archivo = fopen("./usuarios.csv", "r");
        $linea = "";
        $arraySplit = null;
        $objeto = null;
        $array = array();

        if ($archivo == null) {
            return "error";
        }

        while (!feof($archivo)) {
            $linea = fgets($archivo);
            if ($linea != "") {
                $arraySplit = explode(',', $linea);
                array_push($array, new Usuario($arraySplit[0], $arraySplit[1], $arraySplit[2]));
            }
        }

        return $array;
    }
    public static function mostrarLista($array)
    {
        echo "<ul>";
        foreach($array as $usuario)
        {
            echo "<li>".$usuario->mostrarUsuario()."</li><br>";
        }
        echo "</ul>";
    }
}
    /*
RECIBO POR POST Y GUARDO

$persona = new Usuario($_POST['nombre'], $_POST['clave'], $_POST['mail']);
$persona->guardarUsuario(); */

$array = Usuario::leerUsuarios();

Usuario::mostrarLista($array);