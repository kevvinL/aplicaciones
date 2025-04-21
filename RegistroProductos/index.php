<?php include("encabezado.php"); ?>
<div id="centrado">
    <img src="banner.jpg" width="300">
    <fieldset>
        <legend><strong>Registro del nuevo producto</strong></legend>
        <form method="post" action="capturaDatos.php">
            <label>Descripción del producto:<br>
                <input type="text" name="nombre" required></label><br><br>
            <label>Stock:<br>
                <input type="number" name="stock" required></label><br><br>
            <label>Precio de producto:<br>
                <input type="number" step="0.01" name="precio" required></label><br><br>
            <input type="submit" value="Registrar producto">
            <button type="button" onclick="location.href='listadoProductos.php'">Ver listado de productos</button>
        </form>
    </fieldset>
</div>
<?php include("pie.php"); ?>
