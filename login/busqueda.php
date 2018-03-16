<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/album.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <div class="navbar-nav px-3">
        <a class="nav-link" href="login.php">Sign in</a>
        <a class="nav-link" href="logout.php">Sign out</a>
      </div>
    </nav>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>

      <form method="get">
      <input name="arsa" class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" method="get">
      </form>

    </nav>

<?php
include('../config.php');
include('searchbar.php');
$name = $_GET['name'];

$consulta = mysqli_query($mysqli, "SELECT * FROM producto WHERE (nombre like '%$name%')");


while ($res = mysqli_fetch_array($consulta)){

  echo "<br/>";
  echo "<div class=\"album py-5 bg-light\">";
    echo "<div class=\"container\">";

    echo "<div class=\"row\">";
  echo "<img src=\"".$res['imagen']."\"width=\"300\" height=\"250\"/>";
  echo"<div class='col-md-4'>";
    echo"<div class='card mb-4 box-shadow'>";
      echo"<div class='card-body'>";
        echo"<p class='card-text'>".$res['descripcion']."</p>";
        echo"<div class='d-flex justify-content-between align-items-center'>";
          echo"<div class='btn-group'>";
            echo "<button type=\"button\" onclick=\"location.href='../productos/prueba.php?codigo=".$res['codigo']."'\" class=\"btn btn-sm btn-outline-secondary\">View</button>";
            echo"<button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>";
          echo"</div>";
          echo"<small class='text-muted'>9 mins</small>";
        echo"</div>";
      echo"</div>";
    echo"</div>";
  echo"</div>";
  echo"</div>";
  echo"</div>";
  echo"</div>";


}
?>

</body>
</html>