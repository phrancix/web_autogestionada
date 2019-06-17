
<?php include '../includes/header.php'; ?>
<?php include '../includes/nav-admin.php'; ?>

<?php

	if(isset($_GET['id'], $_GET['nombre_plato'])){
		$id = $_GET['id'];
		$nombre_plato = $_GET['nombre_plato'];
	}	
?>	

<div class='container'>

	<p>	Vas a borrar el registro número <?php echo $id ?> </p>
	<p>correspondiente al plato <?php echo $nombre_plato ?>. </p>
	
	<br>
	<h2> ¿Estás seguro> </h2>
	
	
	<a href='borrar-plato.php?id=<?php echo $id ?>' class='btn btn-outline-success'>BORRAR</a>
	<a href='admin-platos.php' class='btn btn-outline-danger'>VOLVER</a>
						
	

</div>
	
<?php include '../includes/footer.php'; ?>