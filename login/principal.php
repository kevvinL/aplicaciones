<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CONTROL DE CLIENTES</title>
    <link href="estilo_principal.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
    <p id="centrado">
        Bienvenido > <strong><?php echo $_SESSION['admin']; ?></strong><br>
        | <a href="cerrar.php">Cerrar Sesión</a> |
    </p>
</header>

<section>
    <table border="1" width="550" cellspacing="5" cellpadding="10">
        <tr>
            <td>
                <a href="#">
                    <img src="icono_cliente.png" width="60" height="60" alt="Registro Cliente">
                </a>
            </td>
            <td>
                <a href="#">Registro de clientes</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#">
                    <img src="icono_lista.png" width="60" height="60" alt="Listado">
                </a>
            </td>
            <td>
                <a href="#">Listado de Clientes</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="javascript:window.close()">
                    <img src="icono_salida.png" width="60" height="60" alt="Salir">
                </a>
            </td>
            <td>
                <a href="javascript:window.close()">Salir</a>
            </td>
        </tr>
    </table>
</section>

<footer>
    <?php include 'pie.php'; ?>
</footer>
</body>
</html>
