<?php
function conectarDB() : mysqli{
    $db = mysqli_connect("localhost", "root", "temporal", "bienesraices_crud");

    if(!$db){
        echo "No se pudo conectar";
        exit;
    }
    return $db;
}