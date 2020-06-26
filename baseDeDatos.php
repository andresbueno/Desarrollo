<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="baseDeDatos.php" method="post">

        <label>
            Identificación:
            <input type="text" name="ident">
        </label>
        <br><br>
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label>
            Grado:
            <input type="text" name="grado">
        </label>
        <br><br>
        <label>
            Promedio:
            <input type="text" name="prom">
        </label>
        <br><br>
        <input type="submit" value="Guardar Datos" name="btn">
        <input type="submit" value="Consultar" name="consulta">
        <input type="submit" value="Modificar" name="mod">
        <input type="submit" value="Eliminar" name="Eli">
    
        <br>

    <?php
        if(isset($_POST['btn'])){

            include("conect.php");


            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];


            $conectar->query("INSERT INTO $tablaEstudiantes (Identificacion, Nombre, Grado, Promedio) VALUES ('$Documento','$Nombre', '$grado','$promedio')");

            // $conectar->query("INSERT INTO $tablaEstudiantes VALUES ('$Documento', '$Nombre', '$grado','$promedio')");

            // $conectar->query("INSERT into $tablaEstudiantes values ('$Documento', '$Nombre', '$grado','$promedio')");

            //$conectar->query("insert into $tablaEstudiantes values ('$Documento', '$Nombre', '$grado','$promedio')");
            
            include("close.php");

        }


        if(isset($_POST['consulta'])){

            include("conect.php");


            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];


            $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiantes WHERE Promedio != $promedio");
            while($consulta = mysqli_fetch_array($datos)){
                echo $consulta['Nombre'].' - '.$consulta['Grado'].' - '.$consulta['Promedio'].'<br>';
            }

            include("close.php");
        }

        if(isset($_POST['mod'])){

            include("conect.php");

            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];

            if($Documento == "" || $Nombre == ""){
                echo"El campo es obligatorio para modificar datos";
            }else{
                $buscar=0;
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiantes WHERE Identificacion = '$Documento' ");
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){
                    echo "El documento no existe";
                }else{
                    mysqli_query($conectar, "UPDATE $tablaEstudiantes SET Identificacion='$Documento', Nombre='$Nombre', Grado='$grado' WHERE Identificacion = '$Documento'");
                    echo"Se modificó";
    
                }
            }



            include("close.php");
        }


        if(isset($_POST['Eli'])){

            include("conect.php");

            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];

            if($Documento == ""){
                echo"El campo es obligatorio para modificar datos";
            }else{
                $buscar=0;
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiantes WHERE Identificacion = '$Documento' ");
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){                    
                    echo "El documento no existe";
                }else{
                    mysqli_query($conectar,"DELETE FROM $tablaEstudiantes WHERE Identificacion = '$Documento'");
                    echo "El usuario con identificacion $Documento se eliminó de la base de datos";
                }
            }



            include("close.php");
        }

        
    ?>
    
    </form>
    
</body>
</html>