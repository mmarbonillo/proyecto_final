<?php
include('../config.php');
include('añadircarro.php');

$consulta = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $articulo[$i]");

while ($res = mysqli_fetch_array($consulta)){
    echo "<td>".$res['codigo']."</td>";
    echo "<td>".$res['nombre']."</td>";
    #echo "<td>".$res['precio']."</td>";
    #echo "<td><img src=\"".$res['imagen']."\" width=\"150\" height=\"100\"/></td>";
    #echo "<td>".$res['descripcion']."</td>"; 
    }


?>