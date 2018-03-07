<?php
session_start();

if($_SESSION['canAccess'] == false) {
    header('Location: index.php');
    exit;
} else {echo "<h2>Estás dentro</h2>";}
?>