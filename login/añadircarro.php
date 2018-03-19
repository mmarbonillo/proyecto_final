<?php
include('../config.php');
session_start();

$articulo = $_GET['cod'];

$carrito = array();
$_SESSION['carro'] = $articulo;


if (!empty($_SESSION['carro'])) {
    $_SESSION['carro']['articulo'] = $articulo;
    $carrito = $_SESSION['carro']['articulo'];
} else { exit; }


header('Location: index.php');

?>