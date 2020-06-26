<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Login</h1>
    <form action="login.php" method="post">

    Identificación: <br>
    <input type="text" name=user placeholder="&#128100; Id">
    <br><br>
    Contraseña: <br>
    <input type="password" name=pass placeholder="&#128272; password">
    <br><br>
    <input type="submit" name='login' value='Ingresar'>
    <br>

    <?php

        if(isset($_POST['login'])){
            
            include('conect.php');
            $usuario = $_POST['user'];
            $contra = $_POST['pass'];

            

            if($usuario == "" || $contra == ""){
                echo"Por favor, llene los campos para ingresar";
            }else{
                $buscar=0;
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiantes WHERE Identificacion = '$usuario' AND Clave='$contra'");
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){
                    echo "Datos incorrectos";
                }else{
                    session_start();
                    $_SESSION['usua']= $usuario;
                    
                    header("location:pg1.php");
                }
                mysqli_free_result($datos);
            }

            include("close.php");

        }

    ?>

    </form>


    
</body>
</html>