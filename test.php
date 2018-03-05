<?php

include("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM usuario");

	while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<h4>".$res['id']."</h4>";
		echo "<h4>".$res['email']."</h4>";
		echo "<h4>".$res['password']."</h4>";
		echo "<h4>".$res['nombre']."</h4>";
		
	}
	mysqli_close($mysqli);
	?>