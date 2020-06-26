<?php
    $host = "localhost"; //servidor al que se conecta
    $usuario = "Admin"; //Usuario con el que se ingresa a la base de datos
    $contraseña = "124"; //Contraseña de acceso
    $baseDatos= "colegio"; //Nombre de la base de datos


    $tablaEstudiante = "estudiante"; //Variable donde se guarda la tabla que está en la base de datos

    //error_reporting(0); //No permite que aparezcan errores (en caso de haberlos)

    $conectar = new mysqli($host, $usuario, $contraseña, $baseDatos); //Variable "$conectar" donde se guarda la conexión a la base de datos

    //En caso de presentar errores, saldrá el mensaje del "echo" y se detiene todo proceso que haya después (línea 17)
    if($conectar->connect_errno){
        echo "Lo sentimos. No se puede conectar";
        exit();
    }
?>