<?php
include('../config.php');
session_start();

$articulo = $_GET['cod'];

$carrito = array();


$_SESSION['carro']['numero_articulos'] = 0;

#Guardo la expresion en una variable para usarla con más facilidad
$numero_articulos = $_SESSION['carro']['numero_articulos'];

#Guardo el codigo del articulo
$_SESSION['carro'][$numero_articulos] = $articulo;
#Actualizo el contador que me indica la posición del array
$numero_articulos++;
#Vuelvo a igualar
$_SESSION['carro']['numero_articulos'] = $numero_articulos;

if (!empty($_SESSION['carro'])) {
    $_SESSION['carro']['numart'] = $articulo;
    $carrito = $_SESSION['carro']['articulo'];
} else { exit; }


header('Location: index.php');

?>