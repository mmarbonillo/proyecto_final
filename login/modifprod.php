<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <link href="../css/addproducto.css" rel="stylesheet">
    
  </head>

  <body class="text-center">
    <form method="post">
    <fieldset>
    <div>
      <label for="Name" >Nombre del producto</label>
      <input type="text" name="name" placeholder="Product Name" autofocus>
    </div>

    <div>
      <label for="precio" class="sr-only">Precio</label>
      <input type="text" name="precio" placeholder="Precio">
    <div>

    <div>
      <label for="fabricante" class="sr-only">Fabricante</label>
      <input type="text" name="fabricante" placeholder="Fabricante">
    <div>

    <div>
      <label for="imagen" class="sr-only">Imagen
      <input type="text" name="imagen" placeholder="Ruta Imagen"></label>
    <div>

    <div>
      <label for="descripcion" class="sr-only">Descripcion</label>
      <input type="text" name="descripcion" placeholder="Descripcion">
    <div> 

      <button type="submit">Ejecutar cambios</button>
    </div>
    </fieldset>
    </form>

<?php
include('../config.php');

$codigo = $_GET['codigo'];

$namepost = $_POST['name'];
$preciopost = $_POST['precio'];
$fabripost = $_POST['fabricante'];
$imgpost = $_POST['imagen'];
$descrippost = $_POST['descripcion'];

$fabri = mysqli_query($mysqli, "SELECT * FROM fabricante WHERE nombre = '$fabripost'");

while ($res = mysqli_fetch_array($fabri)){
    $cod = $res['codigo'];
}

if(!empty($namepost)) {
    $consulta = mysqli_query($mysqli, "UPDATE producto SET nombre='$namepost' WHERE codigo=$codigo");
}

if(!empty($preciopost)) {
    $consulta = mysqli_query($mysqli, "UPDATE producto SET precio='$preciopost' WHERE codigo=$codigo");
}

if(!empty($fabripost)) {
    $consulta = mysqli_query($mysqli, "UPDATE producto SET codigo_fabricante='$cod' WHERE codigo=$codigo");
}

if(!empty($imgpost)) {
    $consulta = mysqli_query($mysqli, "UPDATE producto SET imagen='$imgpost' WHERE codigo=$codigo");
}

if(!empty($descrippost)) {
    $consulta = mysqli_query($mysqli, "UPDATE producto SET descripcion='$descrippost' WHERE codigo=$codigo");
}

?>
  </body>
</html>