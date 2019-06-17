
<!DOCTYPE html>

<html lang="es">

	<head>

		<meta charset="utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<title>Administrar Platos</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<!-- Fuentes de Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Shojumaru&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		
	</head>

	<body>
		
		<?php 
			include 'admin-datos.php'; 
			include '../includes/funciones.php';
		?>
		
		<div class='container'>
		
			<h1> LISTA DE PLATOS </h1>
			<hr>
			<a href="nuevo-plato.php" class="btn btn-outline-secondary mb-3">AÑADIR PLATO</a>
			<br>
			
			<table class="table table-sm table-striped table-bordered table-dark">
			
				<tr align='center'>
					<th>#</th>
					<th>PLATO</th>
					<th>ORDEN</th>
					<th>PRECIO</th>
					<th>ACTIVO</th>
					<th></th>
					<th></th>
				</tr>
				<?php
					
					
					echo '<tr>';
					while($reg = mysqli_fetch_array($consulta_todos)){
						
						echo '<td>'.$reg['id'].'</td>';
						echo '<td>'.$reg['nombre_plato'].'</td>';
						echo '<td>'.$reg['orden_plato'].'</td>';
						echo '<td>'.$reg['precio_ud'].'€</td>';
						echo '<td>';
							if($reg['menu_activo']) {
								echo '<p class="activo">SI</p>';
							}else{
								echo '<p class="inactivo">NO</9>';
							}
						echo'</td>';
						
						echo '<td><button type="button" class="btn btn-outline-warning">Modificar</button></td>';
						
						echo '<td><button type="button" class="btn btn-outline-danger">Borrar</button></td>';
						
					echo '</tr>';
						
					}
					
					mysqli_close($conex);
				?>

			</table>
			
		</div>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
	
</html>