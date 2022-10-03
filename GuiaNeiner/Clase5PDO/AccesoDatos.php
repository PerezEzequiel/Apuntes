<?php

use AccesoDatos as GlobalAccesoDatos;

class AccesoDatos{
    private static AccesoDatos $objetoAccesoDatos;
    private PDO $objetoPDO;

    public function __construct($usuario,$clave,$dbname)
    {
        try{
            $this->objetoPDO = new PDO("mysql:host=localhost;dbname=$dbname",$usuario,$clave);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function prepararConsulta(string $consulta){
        return $this->objetoPdo->prepare($consulta);
    }


    //si no esta seteado el atributo objetoAccesoDatos de ESTA CLASE(self hace referencia a la clase actual)
    public static function dameUnObjetoAcceso($usuario,$clave,$dbname){
        if(!isset(self::$objetoAccesoDatos)){
            self::$objetoAccesoDatos = new AccesoDatos($usuario,$clave,$dbname);
        }
        return self::$objetoAccesoDatos;
    }

}