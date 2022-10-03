<?php

class Usuario
{
    private $nombre;
    private $clave;
    private $mail;
    private $fechaDeRegistro;
    public $id = 0;
    private $imagen;

    public function __construct($nombre = "sinnombre", $clave = "sinclave", $mail = "sinmail", $fechaDeRegistro = "", $imagen = $nombre.".json")
    {
        $this->id = $this->id + 1;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->mail = $mail;
        if ($fechaDeRegistro == "") {
            $fechaDeRegistro = date('now');
        }
        $this->imagen = $imagen;
    }

    private function parser()
    {
        return "$this->nombre,$this->clave,$this->mail\r\n";
    }
    private function mostrarUsuarioEnLista()
    {
        return "<li>$this->nombre</li><br><li>$this->clave</li><br><li>$this->mail</li><br>";
    }
    public static function mostrarUsuariosEnLista()
    {
        $array = Usuario::Leer();
        $retorno = "";
        foreach ($array as $usuario) {
            $retorno .= $usuario->mostrarUsuarioEnLista();
        }
        return $retorno;
    }

    private static function buscarClave($array, $usuarioRecibido)
    {
        $bool = false;

        foreach ($array as $usuario) {
            if (strcmp($usuario->clave, $usuarioRecibido->clave) == 0) {
                $bool = true;
                break;
            }
        }
        return $bool;
    }

    private static function buscarUsuario($array, $usuarioRecibido)
    {
        $bool = false;

        foreach ($array as $usuario) {
            if (strcmp($usuario->mail, $usuarioRecibido->mail) == 0) {
                $bool = true;
                break;
            }
        }
        return $bool;
    }
    public static function verificarUsuario($array, $usuario)
    {
        $retorno = "No verificado";

        if (Usuario::buscarUsuario($array, $usuario)) {
            $retorno = "Error en los datos";
        }
        if (Usuario::buscarUsuario($array, $usuario) && Usuario::buscarClave($array, $usuario)) {
            $retorno = "Verificado";
        }

        return $retorno;
    }

    public static function Guardar($usuario)
    {
        $path = "./usuarios.json";
        $archivo = "";
        if ($usuario != null && $path != "") {
            $archivo = fopen($path, "a");
            if ($archivo == null) {
                return "error";
            } else {

                if (fwrite($archivo, $usuario->parser()) > 0) {
                    return "agregado";
                }
                fclose($archivo);
            }
        }
    }
    public static function Leer()
    {
        $archivo = fopen("./usuarios.json", "r");
        $array = null;

        if ($archivo == null) {
            echo "error";
        } else {
            $array = array();
            while (!feof($archivo)) {
                $linea = fgets($archivo);
                $linea = trim($linea);
                if ($linea != "") {
                    list($nombre, $clave, $mail) = explode(",", $linea);
                    if (isset($nombre) && isset($clave) && isset($mail)) {
                        array_push($array, new Usuario($nombre, $clave, $mail));
                    }
                }
            }
            fclose($archivo);
        }
        return $array;
    }
}
