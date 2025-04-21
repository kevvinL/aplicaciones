<?php
session_start();
$_SESSION['Pregunta5'] = $_POST['preg5'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Encuesta</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
    <h3>INFORME DE ENCUESTA</h3>
</header>

<?php
$nombres = $_SESSION['nombres'] ?? '';
$dni = $_SESSION['dni'] ?? '';
$pregunta1 = $_SESSION['Pregunta1'] ?? '';
$pregunta2 = $_SESSION['Pregunta2'] ?? '';
$pregunta3 = $_SESSION['Pregunta3'] ?? '';
$pregunta4 = $_SESSION['Pregunta4'] ?? '';
$pregunta5 = $_SESSION['Pregunta5'] ?? '';
?>

<section>
    <form id="formulario" method="POST" action="resumen.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <td><strong>Nombre del ciudadano</strong></td>
                <td><?php echo htmlspecialchars($nombres); ?></td>
            </tr>
            <tr>
                <td><strong>DNI</strong></td>
                <td><?php echo htmlspecialchars($dni); ?></td>
            </tr>
            <tr>
                <td><strong>¿Cómo se siente a nivel de seguridad en la ciudad de Lima?</strong></td>
                <td><?php echo htmlspecialchars($pregunta1); ?></td>
            </tr>
            <tr>
                <td><strong>¿Qué tipo de delito cree usted que es el más común en su zona de residencia?</strong></td>
                <td><?php echo htmlspecialchars($pregunta2); ?></td>
            </tr>
            <tr>
                <td><strong>¿Generalmente qué día cree usted que ocurren más incidencias?</strong></td>
                <td><?php echo htmlspecialchars($pregunta3); ?></td>
            </tr>
            <tr>
                <td><strong>¿Cuál cree usted que sería la mejor medida para disminuir la delincuencia?</strong></td>
                <td><?php echo htmlspecialchars($pregunta4); ?></td>
            </tr>
            <tr>
                <td><strong>¿Usted conoce las medidas que implementa la policía del Perú para disminuir la delincuencia?</strong></td>
                <td><?php echo htmlspecialchars($pregunta5); ?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" onclick="cambiarAccion('pregunta5.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('index.php')">Volver a encuestar</button>
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
