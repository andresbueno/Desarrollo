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
    <form>
        <?php
            $producto = $_POST['productos'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['pUnitario'];
            $compra = $cantidad * $precio;

            if($producto == 'Televisor(es)'){
                $descuento = $compra * 0.1;
                $total = $compra - $descuento;
            }elseif ($producto == 'Nevera(s)') {
                $descuento = $compra * 0.15;
                $total = $compra - $descuento;
            }elseif ($producto == 'Computador(es)') {
                $descuento = $compra * 0.20;
                $total = $compra - $descuento;
            }else {
                $descuento = $compra * 0.25;
                $total = $compra - $descuento;
            }


            echo "Por la compra de $cantidad $producto obtuvo un descuento de $$descuento, así que sólo debe pagar  $$total";
        ?>
        <br><br>
        <a href="taller1.html"> Volver </a>
    </form>
    
</body>
</html>