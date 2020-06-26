<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="interaccionBD.php" method="post">

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
        <input type="submit" value="Eliminar" name="eli">
    
    </form>


    <?php
        if(isset($_POST['btn'])){

            include('conectar.php');

            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];

            $conectar->query("INSERT INTO $tablaEstudiante (Identificacion, Nombre, Grado, Promedio) VALUES ('$Documento', '$Nombre', '$grado','$promedio')");
            
            include("desconectar.php");
        }


        if(isset($_POST['consulta'])){

            include("conectar.php");


            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];

            //En la variable $datos se guarda la consulta de la tabla estudiante.
            $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiante WHERE Promedio = '$promedio' && Grado='$grado'");
            //Se crea un while que recorra la variable $datos y cada registro que encuetre lo guarda en la variable $condulta
            while($consulta = mysqli_fetch_array($datos)){
                //imprime por pantalla lo que encuentra con cada iteracion del While
                echo $consulta['Nombre'].' - '.$consulta['Grado'].' - '.$consulta['Promedio'].'<br>';// unicamente muestra por pantalla el valor de lo que se pide a través de la variable $consulta
             }

            include("desconectar.php");
        }


        if(isset($_POST['mod'])){

            include("conectar.php");


            $Documento = $_POST['ident'];
            $Nombre = $_POST['nombre'];
            $grado = $_POST['grado'];
            $promedio = $_POST['prom'];

            if($Documento == "" || $Nombre == "" || $grado == "" || $promedio == ""){//Alt + 124 = |
                echo"El campo es obligatorio para modificación";
            }else{
                $buscar =0;
                //En la variable $datos se guarda la consulta de la tabla estudiante.
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiante WHERE Identificacion = '$Documento'");
                //Se crea un while que recorra la variable $datos y cada registro que encuetre lo guarda en la variable $condulta
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){
                    echo"El documento no existe en la base de datos";
                }else{
                    mysqli_query($conectar,"UPDATE $tablaEstudiante SET Identificacion = '$Documento', Nombre='$Nombre', Grado='$grado', Promedio='$promedio' WHERE Identificacion = '$Documento'");
                    echo "Se modificó con exito";
                }
            } 
            include("desconectar.php");
        }


        if(isset($_POST['eli'])){

            include("conectar.php");


            $Documento = $_POST['ident'];
            // $Nombre = $_POST['nombre'];
             //$grado = $_POST['grado'];
            // $promedio = $_POST['prom'];

            if($Documento == ""){//Alt + 124 = |
                echo"El campo es obligatorio para modificación";
            }else{
                $buscar =0;
                //En la variable $datos se guarda la consulta de la tabla estudiante.
                $datos = mysqli_query($conectar, "SELECT * FROM $tablaEstudiante WHERE Identificacion = '$Documento'");
                //Se crea un while que recorra la variable $datos y cada registro que encuetre lo guarda en la variable $condulta
                while($consulta = mysqli_fetch_array($datos)){
                    $buscar++;
                }

                if($buscar == 0){
                    echo"El documento no existe en la base de datos";
                }else{
                    mysqli_query($conectar, "DELETE FROM $tablaEstudiante WHERE Identificacion = '$Documento'");
                    echo "El registro se eliminó correctamente";
                }
            } 
            include("desconectar.php");
        }


    ?>
    
</body>
</html>