<?php include "../includes/header.php"; ?>
		
		<?php 
			include 'admin-datos.php'; 
			include '../includes/header.php';
			include '../includes/nav-admin.php';
		?>
		
		<div class='container'>
			<?php  ?>
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
						
						
						echo "<td><a href='modificar-plato.php?id=".$reg['id']."' class='btn btn-outline-warning'>Modificar</a></td>";
						
						echo "<td><a href='conf-borrar.php?id=".$reg['id']."&nombre_plato=".$reg['nombre_plato']."' class='btn btn-outline-danger'>Borrar</a></td>";
						
					echo '</tr>';
						
					}
					
					mysqli_close($conex);
				?>

			</table>
			
		</div>
	
<?php include "../includes/footer.php"; ?>