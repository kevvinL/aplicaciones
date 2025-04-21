<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 4</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form id="formulario" method="POST" action="pregunta4.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <th colspan="2">
                    ¿Cuál cree usted que sería la mejor medida para disminuir la delincuencia?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg4" value="Mayor números de policías" /> Mayor números de policías<br/>
                    <input type="radio" name="preg4" value="Mayor profesionalismo de las autoridades" /> Mayor profesionalismo de las autoridades<br/>
                    <input type="radio" name="preg4" value="Aumentar las penas y que sean ejecutadas" /> Aumentar las penas y que sean ejecutadas<br/>
                    <input type="radio" name="preg4" value="Nada" /> Nada
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta3.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('pregunta5.php')">Siguiente &gt;</button>
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
