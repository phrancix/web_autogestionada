
<?php

include 'conexion.php';

// Preparamos las órdenes de consulta.
	
	$sql_prim = "SELECT * FROM platos WHERE orden_plato = 'primero' and menu_activo = 1";
	$sql_segu = "SELECT * FROM platos WHERE orden_plato = 'segundo' and menu_activo = 1";
	$sql_post = "SELECT * FROM platos WHERE orden_plato = 'postre' and menu_activo = 1";

// Ejecutamos la consulta.
	
	$consulta_primeros = mysqli_query($conex, $sql_prim);
	$consulta_segundos = mysqli_query($conex, $sql_segu);
	$consulta_postres  = mysqli_query($conex, $sql_post);
	
	

?>