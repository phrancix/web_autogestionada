
<?php

include '../includes/conexion.php';

// Preparamos las órdenes de consulta.
	
	$sql_full = "SELECT * FROM platos ORDER BY orden_plato, nombre_plato";

// Ejecutamos la consulta.
	
	$consulta_todos = mysqli_query($conex, $sql_full);
	
?>