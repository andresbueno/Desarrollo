<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taller1.css">
    <title>Taller php</title>
</head>
<body>
        <h1>Electrodomésticos Buenísimo</h1>

    <form action="pruebas.php" method="POST">
        <label>
            Producto:
            <br>
            <select name="productos" class="produc1">
                <option value="Televisor(es)">Televisor</option>
                <option value="Nevera(s)">Nevera</option>
                <option value="Computador(es)">Computador</option>
                <option value="Aire Acondicionado(s)">Aire Acondicionado</option>
            </select>
        </label>
        <br><br>
        <label>
            Precio Unitario:
            <br>
            <!-- <input type="text" name="pUnitario" title="Digite valores numéricos"> -->
            <?php
                $pre = 0;
                if(isset($_POST['productos'])){
                    $pro= $_POST['productos'];
                    if ($pro == 'Televisor(es)') {
                        $pre=2000000;
                    }
                }
                echo "<input type='number' name='cantidad' value='$pre'>"
            ?>
        </label>
        <br><br>
        <label>
            Cantidad:
            <br>
            <input type="number" name="cantidad" value="0">
        </label>
        <br><br>
        <input type="submit" class="btn" name="btn" value="Calcular">



    </form>


    
</body>
</html>