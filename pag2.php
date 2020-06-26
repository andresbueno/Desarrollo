<?php
    session_start();

    error_reporting(0);
    $user = $_SESSION['usuario'];

    if($user == "" || $user == null){
        echo"Debe iniciar sesión.";
        echo"<br> <a href='inicioSesion.php'> ir a inicio Sesion </a>";
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Bienvenido, <?php echo $user; ?>. Este archivo es pag2.php</h1>
    <a href="pag1.php">Ir a pag1</a>
    
    <a href="finSesion.php">Salir</a>

</body>
</html>