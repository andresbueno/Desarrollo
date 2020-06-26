<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Login</h1>

    <form action="inicioSesion.php" method="post">

        Identificación: <br>
        <input type="text" name='user' placeholder="Id">
        <br><br>
        Contraseña: <br>
        <input type="password" name='pass' placeholder="password">
        <br><br>
        <input type="submit" name='login' value='Ingresar'>
        <br>

    <?php
        if(isset($_POST['login'])){

            include("conectar.php");


            $Documento = $_POST['user'];
            $contra = $_POST['pass'];

            if($Documento == "" || $contra == ""){//Alt + 124 = |
                echo"El campo es obligatorio para iniciar sesión";
            }else{
                $buscar =0;
                //En la variable $datos se guarda la consulta de la tabla estudiante.
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiante WHERE Identificacion = '$Documento' AND Clave = '$contra'");
                //Se crea un while que recorra la variable $datos y cada registro que encuetre lo guarda en la variable $condulta
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){
                    echo"Datos incorrectos";
                }else{

                    session_start();
                    $_SESSION['usuario'] = $Documento;
                    header("Location:pag1.php");
                }
            } 
            mysqli_free_result($datos);
            include("desconectar.php");
        }
    ?>

    </form>


    
</body>
</html>