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
  </head>

  <body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <div class="navbar-nav px-3">
        <a class="nav-link" href="login.php">Sign in</a>
        <a class="nav-link" href="logout.php">Sign out</a>
      </div>
    </nav>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" class="prueba"></span>
          </button>
        </div>
      </div>
    </header>

    
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
          <?php
include("../config.php");
$consul = mysqli_query($mysqli, "SELECT * FROM producto");
$cuenta = mysqli_num_rows($consul);

for($cod = 1; $cod <= $cuenta; $cod++) {
  
  echo "<tr>";
  $query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $cod");


while ($res = mysqli_fetch_array($query)){
/*echo "<div class=\"col-md-4\">";
  echo "<div class=\"card mb-4 box-shadow\">";
  echo "<img class=\"card-img-top\" src=\"".$res['imagen']."\" width=\"150\" height=\"200\"/></td>";
    
      echo "<div class=\"card-body\">";
        echo "<p class=\"card-text\">".$res['descripcion']."</p>";
        echo "<div class=\"d-flex justify-content-between align-items-center\">";
        echo "<div class=\"btn-group\">";
          echo "<button type=\"button\" onclick=\"location.href='../productos/producto$cod.php'\" class=\"btn btn-sm btn-outline-secondary\">View</button>";
          echo "<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>";
        echo "</div>";
        echo "<small class=\"text-muted\">9 mins</small>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";*/
echo "<br/>";
              echo "<img src=\"".$res['imagen']."\"width=\"150\" height=\"150\"/>";
              echo"<div class='col-md-4'>";
              echo"<div class='card mb-4 box-shadow'>";
              echo"<div class='card-body'>";
              echo"<p class='card-text'>".$res['descripcion']."</p>";
              echo"<div class='d-flex justify-content-between align-items-center'>";
              echo"<div class='btn-group'>";
              echo "<button type=\"button\" onclick=\"location.href='../productos/producto$cod.php'\" class=\"btn btn-sm btn-outline-secondary\">View</button>";
              echo"<button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>";
              echo"</div>";
              echo"<small class='text-muted'>9 mins</small>";
              echo"</div>";
              echo"</div>";
              echo"</div>";
              echo"</div>";


}

}
?>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>