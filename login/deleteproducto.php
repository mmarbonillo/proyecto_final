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
    <fieldset><div>
      <label for="cod" >Codigo del producto</label>
      <input type="text" name="cod" placeholder="Product Code" required autofocus>
    </div>


    <div>
      <label for="Name" >Nombre del producto</label>
      <input type="text" name="name" placeholder="Product Name" required autofocus>
    </div> 

      <button type="submit">Eliminar producto</button>
    </div>
    </fieldset>
    </form>

<?php
include('../config.php');

$codepost = $_GET['cod'];
$namepost = $_GET['name'];


$consulta = mysqli_query($mysqli, "DELETE FROM producto WHERE codigo=$codepost and nombre='$namepost';");

?>
  </body>
</html>