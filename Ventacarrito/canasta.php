<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('encabezado.php'); ?>
    </header>

    <section>
        <table border="1" width="550" cellspacing="10" cellpadding="0">
            <tr>
                <td>
                    <img src="carritoCompras.jpg" width="80" height="80" />
                </td>
            </tr>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>

            <?php
            error_reporting(0);
            session_start();

            include('capturaDatos.php');
            include('asignaciones.php');

            $codigo = getProducto();
            $cantidad = getCantidad();

            if (!isset($_SESSION['productos'])) {
                $_SESSION['productos'][$codigo] = $cantidad;
            } else {
                foreach ($_SESSION['productos'] as $pro => $cant) {
                    if ($codigo == $pro) {
                        $_SESSION['productos'][$pro] += $cantidad;
                        $bandera = 1;
                    }
                    $total += $cant;
                }
            }

            if (!$bandera) {
                $_SESSION['productos'][$codigo] = $cantidad;
            }

            if (isset($_SESSION['productos'])) {
                $tSubtotal = 0;
                foreach ($_SESSION['productos'] as $cod => $cant) {
                    $precio = asignaPrecio($cod);
                    $subtotal = $cant * $precio;
                    $tSubtotal += $subtotal;
                    ?>
                    <tr>
                        <td id="centrado"><?php echo $cod; ?></td>
                        <td><?php echo muestraDescripcion($cod); ?></td>
                        <td id="derecha"><?php echo '$' . number_format($precio, 2); ?></td>
                        <td id="centrado"><?php echo $cant; ?></td>
                        <td id="derecha"><?php echo '$' . number_format($subtotal, 2); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>

            <tr>
                <td id="resaltado">Total a Pagar</td>
                <td></td>
                <td></td>
                <td></td>
                <td id="totales"><?php echo '$' . number_format($tSubtotal, 2); ?></td>
            </tr>

            <tr>
                <td colspan="4">
                    <a href="index.php">Seguir comprando..!!</a>
                </td>
                <td colspan="4">
                    <a href="destruir.php">Finalizar la compra</a>
                </td>
            </tr>
        </table>
    </section>

    <footer>
        <?php include('pie.php'); ?>
    </footer>
</body>
</html>
