<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario desde php</title>
</head>
<body>
<h1>PHP y HTML juntos en un archivo</h1>

<form action="phpHtml.php" method="POST">

    <label for="name"></label>
    <input type="text" name="nombre" id="name" placeholder="Nombre">
    <br>
    <br>
    <label>
        Ingrese la cantidad de hermanos:
        <input type="number" name="hermanos">
    </label>
    <br><br>
    <input type="submit" name="enviar">
    
    
        <?php

            if(isset($_POST['enviar'])){

                $nombre = $_POST['nombre'];
                $h = $_POST['hermanos'];
                

                echo 'Hola '.$nombre.' usted tiene '.$h .' hermanos';
            }
        ?>


</body>
</html>


