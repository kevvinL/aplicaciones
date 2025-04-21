<?php include("encabezado.php"); ?>
<div id="centrado">
    <img src="banner.jpg" width="300">
    <fieldset>
        <legend><strong>Registro del nuevo producto</strong></legend>
        <?php if (!empty($_SESSION['productos'])): ?>
        <table>
            <tr>
                <th>DESCRIPCIÓN DEL PRODUCTO</th>
                <th>STOCK</th>
                <th>PRECIO</th>
            </tr>
            <?php foreach ($_SESSION['productos'] as $producto): ?>
            <tr>
                <td><?= htmlspecialchars($producto['nombre']) ?></td>
                <td><?= (int)$producto['stock'] ?></td>
                <td>$<?= number_format($producto['precio'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <p>No hay productos registrados.</p>
        <?php endif; ?>
        <br>
        <a href="index.php">Seguir registrando</a> | 
        <a href="destruir.php">Cerrar sesión</a>
    </fieldset>
</div>
<?php include("pie.php"); ?>
