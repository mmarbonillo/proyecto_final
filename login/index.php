<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/css.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="get">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

<?php
include("../config.php");

/*
echo "mailpost:";
print_r($mailpost);
echo "</br>";
echo "passwdpost:";
print_r($passwdpost);
echo "</br>";


$mail = mysqli_query($mysqli, "SELECT 'password' FROM usuario WHERE email = '$mailpost'");
$passwd = mysqli_query($mysqli, "SELECT 'email' FROM usuario WHERE password = '$passwdpost'");

echo "Email:";
print_r($mail);
echo "</br>";
echo "Contraseña:";
print_r($passwd);
echo "</br>";

$consulta = "SELECT * FROM usuario WHERE email = '$mailpost' AND password = '$passwdpost'";
$usuario_valido = mysqli_query($mysqli, $consulta);
$mail = mysqli_query($mysqli, "SELECT 'email' FROM usuario WHERE password = '$passwdpost'");
$passwd = mysqli_query($mysqli, "SELECT 'password' FROM usuario WHERE email = '$mailpost'");
print_r($mail);

if($mail == $mailpost) {
  echo "usuario correcto";
  echo "</br>";
  if ($passwd == $passwdpost) {
    echo "contraseña correcta";
    echo "por fin";
  }
}else {echo "poh va a seh que no chula";}



if($mysqli) {
  if($mailpost == $mail && $passwdpost == $passwd) {
    echo "Bien";
  } else {echo "no existe";}
} else {echo "Conexión fallida";}

print_r($usuario_valido);
*/

$mailpost = $_GET["inputEmail"];
$passwdpost = md5($_GET["inputPassword"]);

$consulta = mysqli_query ($mysqli, "SELECT email, password FROM usuario WHERE (email = '$mailpost') AND (password = '$passwdpost')");
echo '</br>';echo '</br>';
#print_r($consulta);
echo '</br>';echo '</br>';

while($res = mysqli_fetch_array($consulta)) {
  echo "<tr>";
  echo "<h4>".$res['email']."</h4>";
  echo "<h4>".$res['password']."</h4>";
}


if($res['email'] = $mailpost) {
  echo "el email existe";
  echo '</br>';
  if($res['password'] = $passwdpost) {
    echo "la contraseña existe";
  } else {echo "La contraseña no existe";}
} else {echo "El usuario no existe";}


?>
  </body>
</html>
