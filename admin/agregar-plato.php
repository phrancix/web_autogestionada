<?php include '../includes/header.php'; ?>
<?php include '../includes/nav-admin.php'; ?>

<?php

	include '../includes/conexion.php';
	
// Validamos los datos y los recogemos en una variable
	if(isset($_POST['nombre_plato'], $_POST['precio_ud'], $_POST['orden_plato'], $_POST['menu_activo'])) {
		
		$nombre_plato = $_POST['nombre_plato'];
		$precio_ud = $_POST['precio_ud'];
		$orden_plato =  $_POST['orden_plato'];
		$menu_activo = $_POST['menu_activo'];
		
// Preparamos la orden SQL
		$sql_agr = "INSERT INTO platos (id, nombre_plato, precio_ud, orden_plato, menu_activo) VALUES (NULL, '$nombre_plato', '$precio_ud', '$orden_plato', '$menu_activo')";
	
// Ejecutamos la consulta
		if(mysqli_query($conex, $sql_agr)){
			echo '<p class="text-center">Nuevo plato: '.$nombre_plato.'</p><br>';
			echo '<p class="text-center">Plato agregado con éxito. Volver al <a class="btn-secondary" href="admin-platos.php">Administrar Platos</a></p>';
		}else{
			echo '<p class="text-center">Fallo al agregar nuevo plato. Volver al <a class="btn-secondary" href="admin-platos.php">Administrar Platos</a></p>';
		}

	}else{
		echo '<p class="text-center">Rellene bien el <a class="btn-secondary" href="nuevo-plato.php">Formulario</a></p>';
	}


?>

<?php include '../includes/header.php'; ?>

