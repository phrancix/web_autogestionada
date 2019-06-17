<?php include '../includes/header.php'; ?>
<?php include '../includes/nav-admin.php'; ?>

<?php

	include '../includes/conexion.php';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql_del = "DELETE FROM platos WHERE id = '$id'";
 ?>
 
	<div class='container'>
		<?php	
				if(mysqli_query($conex, $sql_del)){	
					echo '<p class="text-center">El registro #'.$id.' ha sido borrado con éxito.</p>';
					echo '<p class="text-center">Volver a <a class="btn-secondary" href="admin-platos.php">Administrar Platos</a></p>';
				}else{
					echo '<p class="text-center">No se ha podido borrar el registro.</p>';
				}
			}	
		?>	
	</div>
	
<?php include '../includes/header.php'; ?>
