<?php


$arsa = $_GET['arsa'];

echo $arsa;

if(!empty($_GET['arsa'])) {
  header('Location: busqueda.php?name='.$arsa);
  exit;
}

?>