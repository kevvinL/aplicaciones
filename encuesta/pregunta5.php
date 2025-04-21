<?php
session_start();
$_SESSION['Pregunta4'] = $_POST['preg4'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 5</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form id="formulario" method="POST" action="pregunta5.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <th colspan="2">
                    ¿Usted conoce las medidas que implementa la policía del Perú para disminuir la delincuencia?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg5" value="Si" /> Sí<br/>
                    <input type="radio" name="preg5" value="No" /> No<br/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta4.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('resumen.php')">Siguiente &gt;</button>
                </td>
            </tr>
        </table>
    </form>
</section>

<footer>
    <?php include 'pie.php'; ?>
</footer>

<script>
function cambiarAccion(destino) {
    document.getElementById('formulario').action = destino;
}
</script>

</body>
</html>
