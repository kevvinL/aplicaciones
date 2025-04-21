<?php
session_start();
$_SESSION['Pregunta1'] = $_POST['preg1'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 2</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form id="formulario" method="POST" action="pregunta2.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <th colspan="2">
                    ¿Qué tipo de delito cree usted que es el más común en su zona de residencia?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg2" value="Hurto" /> Hurto<br/>
                    <input type="radio" name="preg2" value="Robo por descuido" /> Robo por descuido<br/>
                    <input type="radio" name="preg2" value="Robo de vehículo" /> Robo de vehículo<br/>
                    <input type="radio" name="preg2" value="Intento de hurto" /> Intento de hurto<br/>
                    <input type="radio" name="preg2" value="Estafa" /> Estafa<br/>
                    <input type="radio" name="preg2" value="Asesinato" /> Asesinato
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta1.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('pregunta3.php')">Siguiente &gt;</button>
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
