<?php
include('../config.php');
echo "Hola";

$articulo = $_GET['cod'];




$_SESSION['carro'] = $articulo;

$carrito = $_SESSION['carro'];

print_r($carrito);


$consulta = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $carrito");

while ($res = mysqli_fetch_array($consulta)){
    echo "<td>".$res['codigo']."</td>";
    echo "<td>".$res['nombre']."</td>";
    echo "<td>".$res['precio']."</td>";
    echo "<td><img src=\"".$res['imagen']."\" width=\"150\" height=\"100\"/></td>";
    echo "<td>".$res['descripcion']."</td>"; 
    }


?>