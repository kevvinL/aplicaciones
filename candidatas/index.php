<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Votación de Candidatas</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <h3 id="centrado">VOTACIÓN DE CANDIDATAS</h3>
        <h2 id="titulo">REYNA DE PRIMAVERA 2015</h2>
    </header>

    <section>
        <?php
            session_start();

            // Inicializar si no existen
            if (!isset($_SESSION['candidata1'])) $_SESSION['candidata1'] = 0;
            if (!isset($_SESSION['candidata2'])) $_SESSION['candidata2'] = 0;
            if (!isset($_SESSION['candidata3'])) $_SESSION['candidata3'] = 0;
            if (!isset($_SESSION['candidata4'])) $_SESSION['candidata4'] = 0;
            if (!isset($_SESSION['total'])) $_SESSION['total'] = 0;

            // Calcular porcentajes evitando división por cero
            $total = $_SESSION['total'] > 0 ? $_SESSION['total'] : 1;

            $pcandidata1 = round(($_SESSION['candidata1'] * 100) / $total);
            $pcandidata2 = round(($_SESSION['candidata2'] * 100) / $total);
            $pcandidata3 = round(($_SESSION['candidata3'] * 100) / $total);
            $pcandidata4 = round(($_SESSION['candidata4'] * 100) / $total);
            ?>


        <form name="frmVotacion" method="POST" action="conteo.php">
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="candidata1.JPG"/></td>
                    <td id="centrado"><img src="candidata2.JPG"/></td>
                </tr>
                <tr>
                    <td id="centrado">
                        Marisol Romero 19 años <br>
                        <input type="submit" value="Votar" name="btnBoton1"/><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata1']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata1, 2); ?>%
                    </td>
                    <td id="centrado">
                        Cesia Alfaro 22 años<br>
                        <input type="submit" value="Votar" name="btnBoton2" /><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata2']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata2, 2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="candidata3.JPG"/></td>
                    <td id="centrado"><img src="candidata4.JPG"/></td>
                </tr>
                <tr>
                    <td id="centrado">
                        Micaela Borja 20 años<br>
                        <input type="submit" value="Votar" name="btnBoton3" /><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata3']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata3, 2); ?>%
                    </td>
                    <td id="centrado">
                        Karla Guerrero 21 años<br>
                        <input type="submit" value="Votar" name="btnBoton4" /><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata4']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata4, 2); ?>%
                    </td>
                </tr>
            </table>
        </form>

        <?php
            $arreglo = array(
                'Marisol Romero' => $_SESSION['candidata1'],
                'Cesia Alfaro' => $_SESSION['candidata2'],
                'Micaela Borja' => $_SESSION['candidata3'],
                'Karla Guerrero' => $_SESSION['candidata4']
            );

            arsort($arreglo); // Ordena de mayor a menor
            $candidata = array_key_first($arreglo); // Nombre de la ganadora
            $puntaje = $arreglo[$candidata];        // Votos de la ganadora
            ?>


        <table border="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <td id="ganadora">
                    TOTAL DE VOTANTES: <?php echo $_SESSION['total']; ?>
                </td>
            </tr>
            <tr>
                <td id="ganadora">
                    GANADORA: <?php echo $candidata; ?> (<?php echo $puntaje; ?> votos)
                </td>
            </tr>
        </table>
    </section>

    <footer>
        <h5 id="centrado">Todos los derechos reservados @2015 Diseñado por M@nuel Torres</h5>
    </footer>
</body>
</html>
