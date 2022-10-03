<?php


class miClase{
    private $_fecha;

    public function __construct($fecha = date("d/m/y"))
    {
        $this->_fecha = $fecha; 
    }

    public function mostrarFecha()
    {
        echo "La fecha es: $this->_fecha";
    }


}


$fecha = date();
$fecha = new miClase();

$fecha->mostrarFecha();






?>