<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taller1.css">
    <title>Funciones</title>
</head>
<body>
    <h1>Electrodomésticos Buenísimo</h1>

        
    <form action="funciones.php" method="POST">
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
            <input type="text" name="pUnitario" title="Digite valores numéricos">
        </label>
        <br><br>
        <label>
            Cantidad:
            <br>
            <input type="number" name="cantidad" value="0">
        </label>
        <br><br>
        <input type="submit" class="btn" name="btn" value="Calcular">

        <?php
            if (isset($_POST['btn'])) {               
                       
                $producto = $_POST['productos'];

                function calcular($porcentaje){
                    $producto = $_POST['productos'];
                    $cantidad = $_POST['cantidad'];
                    $precio = $_POST['pUnitario'];

                    $compra = $cantidad * $precio;
                    $descuento = $compra * $porcentaje;
                    $total = $compra - $descuento;

                    echo "Por la compra de $cantidad $producto obtuvo un descuento de $$descuento, así que sólo debe pagar  $$total";
                }
                
                if($producto == 'Televisor(es)'){
                    calcular(0.1);
                }elseif ($producto == 'Nevera(s)') {
                    calcular(0.15);
                }elseif ($producto == 'Computador(es)') {
                    calcular(0.20);
                }else {
                    calcular(0.25);
                }

                echo "<a href='funciones.php'>Ok</a>";
            }
        ?>
        
    </form>
        
</body>
</html>