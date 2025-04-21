<?php
session_start();
$_SESSION['Pregunta2'] = $_POST['preg2'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 3</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form id="formulario" method="POST" action="pregunta3.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <th colspan="2">
                    ¿Generalmente qué día cree usted que ocurre más incidencias?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg3" value="Cualquier día" /> Cualquier día<br/>
                    <input type="radio" name="preg3" value="Fin de semana" /> Fin de semana<br/>
                    <input type="radio" name="preg3" value="Fin de mes" /> Fin de mes<br/>
                    <input type="radio" name="preg3" value="Fechas de pago" /> Fechas de pago
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta2.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('pregunta4.php')">Siguiente &gt;</button>
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
