<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

require_once "./AccesoDatos.php";

class Usuario{

    private $ID;
    private $nombre;
    private $apellido;
    private $clave;
    private $mail;
    private $fecha_de_registro;
    private $localidad;

    public function __construct($ID="",$nombre="",$apellido="",$clave="",$mail="",$fecha_de_registro="",$localidad="")
    {
        $this->ID = $ID;
        $this->nombre = $nombre;
        $this->apellido= $apellido;
        $this->clave= $clave;
        $this->mail = $mail;
        $this->fecha_de_registro= date('Y-m-d');
        $this->localidad= $localidad;
    }

    public static function traerTodosLosUsuarios($bsd){
        $objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso("tp","root","");

        $consulta = $objetoAccesoDatos->prepararConsulta("SELECT * from `usuarios`");
        $consulta->execute();

        return $consulta;
    }
    public function insertarUsuario(){
        $objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso("tp","root","");

        $consulta = $objetoAccesoDatos->prepararConsulta("INSERT INTO `usuarios` (nombre,apellido,clave,mail,fecha_de_registro,localidad) VALUES (:nombre,:apellido,:clave,:mail,:fecha_de_registro)");

        $consulta->bindValue(":nombre",$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":apellido",$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":clave",$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":mail",$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":fecha_de_registro",$this->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":localidad",$this->nombre,PDO::PARAM_STR);

        $consulta->execute();

    }
    public function modificarUsuario($objModificacion){
        $objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso("tp","root","");

        $consulta = $objetoAccesoDatos->prepararConsulta("INSERT INTO `usuarios` (nombre,apellido,clave,mail,fecha_de_registro,localidad) VALUES (:nombre,:apellido,:clave,:mail,:fecha_de_registro)");

        $consulta->bindValue(":nombre",$objModificacion->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":apellido",$objModificacion->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":clave",$objModificacion->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":mail",$objModificacion->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":fecha_de_registro",$objModificacion->nombre,PDO::PARAM_STR);
        $consulta->bindValue(":localidad",$objModificacion->nombre,PDO::PARAM_STR);

        $consulta->execute();
    }
    public function eliminarUsuario(){
        $objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso("tp","root","");
        $consulta = $objetoAccesoDatos->prepararConsulta("DELETE FROM usuarios WHERE id = :id");
        $consulta->bindValue(":id",$this->id,PDO::PARAM_INT);
        $consulta->execute();
        return $consulta;

    }

}





?>