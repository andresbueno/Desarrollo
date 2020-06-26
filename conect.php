<?php

    $host = "localhost";
    $usuario = "Andres";
    $contraseña = "1234";
    $baseDatos= "desarrollo";
    //Ahora un comentario aqui


    $tablaEstudiantes = "estudiante";

    error_reporting(0);

    $conectar = new mysqli($host, $usuario, $contraseña, $baseDatos);

    if($conectar->connect_errno){
        echo "Lo sentimos. No se puede conectar";
        exit();
    }
?>

