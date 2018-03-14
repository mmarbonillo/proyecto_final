<?php
include('../config.php');

$codigo = $_GET['codigo'];
$consul = mysqli_query($mysqli, "SELECT * FROM producto where codigo = $codigo");

while ($res = mysqli_fetch_array($consul)){
    $cod = $res['codigo'];
    $name = $res['nombre'];
    $prize = $res['precio'];
    $photo = "<img src=\"".$res['imagen']."\" width=\"150\" height=\"100\"/>";
    $descrip = $res['descripcion'];
}


?>