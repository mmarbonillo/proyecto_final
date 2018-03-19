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
    <form method="get">
    <fieldset>
    <div>
      <label for="Name" >Nombre del producto</label>
      <input type="text" name="name" placeholder="Product Name" required autofocus>
    </div>

    <div>
      <label for="precio" class="sr-only">Precio</label>
      <input type="text" name="precio" placeholder="Precio" required>
    <div>

    <div>
      <label for="fabricante" class="sr-only">Fabricante</label>
      <input type="text" name="fabricante" placeholder="Fabricante" required>
    <div>

    <div>
      <label for="imagen" class="sr-only">Imagen
      <input type="text" name="imagen" placeholder="Ruta Imagen"></label>
    <div>

    <div>
      <label for="descripcion" class="sr-only">Descripcion</label>
      <input type="text" name="descripcion" placeholder="Descripcion" required>
    <div> 

      <button type="submit">Añadir producto</button>
    </div>
    </fieldset>
    </form>

<?php
include('../config.php');

$namepost = $_GET['name'];
$preciopost = $_GET['precio'];
$fabripost = $_GET['fabricante'];
$imgpost = $_GET['imagen'];
$descrippost = $_GET['descripcion'];

$fabri = mysqli_query($mysqli, "SELECT * FROM fabricante WHERE nombre = '$fabripost'");

while ($res = mysqli_fetch_array($fabri)){
    $cod = $res['codigo'];
}


$consulta = mysqli_query($mysqli, "INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) values('$namepost', '$preciopost', '$cod', '../fotos/$imgpost.png', '$descrippost')");

?>
  </body>
</html>
