<?php

//Destino del archivo subido

$destino = "./archivos/" . $_FILES["archivo"]["name"];

$upload = true;

//PATHINFO RETORNA UN ARRAY CON LA INFORMACION DEL PATH
//RETORNA: NOMBRE DEL DIRECTORIO, NOMBRE DEL ARCHIVO, EXTENSION DEL ARCHIVO

//PATHINFO_DIRNAME - retorna solo nombre del directorio
//PATHINFO_BASENAME - retorna el nombre del archivo (con la extension)
//PATHINFO_EXTENSION - retorna solo la extension
//PATHINFO_FILENAME - retorna solo el nombre del archivo

$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

if ($tipoArchivo != "rar" && $tipoArchivo != "pdf" && $tipoArchivo != "zip") {
    //Verifico que no exista una imagen con el mismo nombre.
    if (file_exists($destino)) {
        echo "El archivo ya existe. Verifique!!!";
        $upload = false;
    }

    //Verifico que el tama;o no sobrepase un limite.

    if ($_FILES["archivo"]["size"] > 50000) {
        echo "El tamanio del archivo es grande";
        $upload = false;
    }

    //verifico si es una imagen o no

    $esImagen = getimagesize($_FILES["archivo"]["tmp_name"]);

    if ($esImagen && $upload) {
        //Si es imagen, vuelco el archivo temporal a uno final.
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {
            echo "Subido exitosamente.";
        } else {
            echo "Error";
        }
    }
}else{
    echo "Formato no permitido";
}

