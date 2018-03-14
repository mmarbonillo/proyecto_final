<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/product.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <div class="navbar-nav px-3">
    <a class="nav-link" href="../login/login.php">Sign in</a>
    <a class="nav-link" href="../login/logout.php">Sign out</a>
  </div>
</nav>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

<?php

include("../config.php");
$consul = mysqli_query($mysqli, "SELECT * FROM producto");
$cuenta = mysqli_num_rows($consul);
for($cod = 0; $cod <= $cuenta; $cod++) {
  
  $query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $cod");
  $fabris = mysqli_query($mysqli, "SELECT fabricante.nombre AS fabricante from fabricante, producto WHERE fabricante.codigo=codigo_fabricante");

  $i=0;
  echo "<tbody>";
  echo "<tr>";
  while ($resul = mysqli_fetch_array($fabris)){
    echo "<td>".$resul['fabricante']."</td>";
  }
  while ($res = mysqli_fetch_array($query)){
  echo "<td>".$res['codigo']."</td>";
  echo "<td>".$res['nombre']."</td>";
  echo "<td>".$res['precio']."</td>";
  echo "<td><img src=\"".$res['imagen']."\" width=\"150\" height=\"100\"/></td>";
  echo "<td>".$res['descripcion']."</td>";
  $i++; 
  }
  echo "</tr>";
  echo "</tbody>";
}


?>