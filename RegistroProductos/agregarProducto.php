<?php include("encabezado.php"); ?>
<div id="centrado">
    <h2>Agregar Producto</h2>
    <form method="post" action="capturaDatos.php">
        <label>Nombre del Producto: <input type="text" name="nombre" required></label><br><br>
        <label>Precio: <input type="number" step="0.01" name="precio" required></label><br><br>
        <input type="submit" value="Guardar Producto">
    </form>
</div>
<?php include("pie.php"); ?>
