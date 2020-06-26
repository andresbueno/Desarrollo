
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="suma.css">
    <title>Document</title>
</head>
<body>

    <h1>Operaciones entre dos cantidades</h1>

    <form action="suma.php" method="post">
        <label>
            Ingrese el primer valor:
            <input type="text" name="num1">
        </label>
        <br>
        <br>
        <label>
            Ingrese el segundo valor:
            <input type="text" name="num2">
        </label>
        <br><br>
        <label>
            Operación:
            <select name="operaciones">
                    <option value="sumar">sumar</option>
                    <option value="restar">restar</option>
                    <option value="multiplicar">multiplicar</option>
                    <option value="dividir">dividir</option>
            </select>

        </label>
        <br><br>
        <input type="submit" value="Calcular" name="btn">
        
    </form>


    <?php

        if (isset($_POST['btn'])) {
            $operador = $_POST['operaciones'];
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];

            $suma = $numero1 + $numero2;

            if ( $_POST['operaciones'] == 'sumar') {
                $resultado = $numero1 + $numero2;
            }elseif ($operador == 'restar'){
                $resultado = $numero1 - $numero2;
            }elseif ($operador == 'multiplicar'){
                $resultado = $numero1 * $numero2;
            }else{
                $resultado = $numero1 / $numero2;
            }

            echo '<h2> El resultado de '. $operador. ' ' .$numero1.' y '.$numero2.' es igual a '.$resultado.'</h2>';
        }

        
    ?>

    <!-- <br> <a href="suma.html"> Sumar otros valores </a> -->
    
</body>
</html>
