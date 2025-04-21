<?php
session_start();
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $stock = $_POST['stock'] ?? 0;
    $precio = $_POST['precio'] ?? 0;
    $_SESSION['productos'][] = ['nombre' => $nombre, 'stock' => $stock, 'precio' => $precio];
}
header("Location: listadoProductos.php");
exit();
?>
