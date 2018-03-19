<?php
include('addproducto.php');

$namepost = $_GET['name'];
$preciopost = $_GET['precio'];
$fabripost = $_GET['fabricante'];
#$imgpost = $_GET['imagen'];
$descrippost = $_GET['descripcion'];

$fabri = mysqli_query($mysqli, "SELECT codigo FROM fabricante WHERE nombre = $fabripost");

$consulta = mysqli_query($mysqli, "INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) values('$namepost', '$preciopost', '$fabri', 'imagen', '$descrippost')");

header('Location: addproducto.php');

?>