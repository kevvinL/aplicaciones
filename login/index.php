<?php
session_start();
error_reporting(0);

if (isset($_SESSION['admin'])) {
    header('Location: principal.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
    <link href="estilo_index.css" rel="stylesheet">
</head>
<body>
<section>
    <form name="frmLogin" method="POST" action="login.php">
        <table border="3" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="3">
                    <p id="titulo">Acceso</p>
                </td>
            </tr>
            <tr>
                <td id="derecha" width="150">Usuario</td>
                <td><input type="text" name="txtUsuario" required /></td>
                <td rowspan="4">
                    <img src="usuario.png" width="200" height="200" alt="Usuario" />
                </td>
            </tr>
            <tr>
                <td id="derecha">Clave</td>
                <td><input type="password" name="txtClave" maxlength="4" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="recordar" /> Recordar la clave</td>
            </tr>
            <tr>
                <td></td>
                <td><input id="boton" type="submit" name="btnLogin" value="LOGIN" /></td>
            </tr>
            <tr>
                <td colspan="2" style="color:red;">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</section>
</body>
</html>
