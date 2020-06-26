<?php
    error_reporting(0);
    session_start();
    $user = $_SESSION['usua'];


    if($user == "" || $user == null){
        echo"Debe iniciar sesión.";
        echo"<br> <a href='login.php'> ir a Login </a>";
        exit();
    }


    echo"Hola $user, bienvenido a pg1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hola Soy PG1.php</h1>


    <a href="pg2.php">Ir a pg2</a>
    <a href="cerrarSesion.php">Salir</a>

</body>
</html>