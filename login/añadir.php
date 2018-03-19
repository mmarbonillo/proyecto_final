<?php
include('../config.php');

$namepost = $_POST['name'];
$preciopost = $_POST['precio'];
$fabripost = $_POST['fabricante'];
$imgpost = $_POST['imagen'];
$descrippost = $_POST['descripcion'];

$fabri = mysqli_query($mysqli, "SELECT codigo FROM fabricante WHERE nombre = $fabripost");

$consulta = mysqli_query($mysqli, "INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) values('$namepost', '$preciopost', '$fabri', '$imgpost', '$descrippost')");

header('Location: addproducto.php');

?>