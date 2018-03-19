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
      <label for="Name" >Nombre del producto
      <input type="text" name="name" placeholder="Product Name" required autofocus/></label>
    </div>

    <div>
      <label for="precio" class="sr-only">Precio
      <input type="text" name="precio" placeholder="Precio" required/></label>
    <div>

    <div>
      <label for="fabricante" class="sr-only">Fabricante
      <input type="text" name="fabricante" placeholder="Fabricante" required/></label>
    <div>

    <div>
      <label for="imagen" class="sr-only">Imagen
      <input type="text" name="imagen" placeholder="Ruta Imagen" /></label>
    <div>

    <div>
      <label for="descripcion" class="sr-only">Descripcion
      <input type="text" name="descripcion" placeholder="Descripcion" required/></label>
    <div> 

      <button onclick="location.href='añadir.php'" type="submit">Sign in</button>
    </div>
    </fieldset>
    </form>

<?php
#include('añadir.php');

?>
  </body>
</html>
