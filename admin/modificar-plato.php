<?php include "../includes/header.php"; ?>
<?php include "../includes/nav-admin.php"; ?>

<?php

	include '../includes/conexion.php';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql_sel = "SELECT * FROM platos WHERE id = '$id'";
		$consulta = mysqli_query($conex, $sql_sel);
		
		if($consulta){	
		
			while($reg = mysqli_fetch_array($consulta)){
?>
					<div class='container'>
	
					<h1> MODIFICAR PLATO </h1>
					<hr>
				
				<form class='text-center' method='post' action='agregar-plato.php'>
		
			
					<div class="form-group"> <!--   ID -->
						<label for="id">Registro nº</label>
						<input type="text" class="form-control" name='id' id="id" value="<?php echo $reg['id'] ?>" disabled>
						
					</div>
					<div class="form-group"> <!--   NOMBRE PLATO -->
						<label for="nombre_plato">Nombre del Plato</label>
						<input type="text" class="form-control" name='nombre_plato' id="nombre_plato" value="<?php echo $reg['nombre_plato'] ?>">
					</div>
					
					<div class="form-group"> <!--   PRECIO PLATO -->
						<label for="precio_plato">Precio del Plato</label>
						<input type="text" class="form-control" name='precio_ud' value='<?php echo $reg['precio_ud'] ?>'>
						<small id="emailHelp" class="form-text text-muted">Introduce el precio con dos decímales precedidos de un punto (p.e. 2.50) sin el símbolo €.</small>
					</div>
			
			
			<fieldset class='border border-secondary p-2'> <!--   INTRODUCIR ORDEN -->
				<legend>Selecciona el Orden del Plato (primero, segundo o postre)</legend)>
					<div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="prim" value="primero" 
							<?php
								if($reg['orden_plato'] === 'primero'){
									echo 'checked';
								}
							?>
							>
							<label class="form-check-label" for="prim">PRIMERO</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="segu" value="segundo"
							<?php
								if($reg['orden_plato'] === 'segundo'){
									echo 'checked';
								}
							?>
							>
							<label class="form-check-label" for="segu">SEGUNDO</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="post" value="postre"
							<?php
								if($reg['orden_plato'] === 'postre'){
									echo 'checked';
								}
							?>
							>
							<label class="form-check-label" for="post">POSTRE</label>
						</div>
					</div>
			</fieldset>
			<br><br>

			<fieldset class='border border-secondary p-2'> <!--   INTRODUCIR ACTIVO -->
				<legend>Activa o Desactiva este plato</legend)>
					<div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="menu_activo" value=<?php echo $reg['menu_activo'] ;?> <?php if($reg['menu_activo']==='1'){ echo 'checked';} ?> name='menu_activo'>
							<label class="form-check-label" for="act" >Activar plato en el menú</label>
						</div>
						<!--div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name='menu_activo' id="ina" value=0>
							<label class="form-check-label" for="ina">DESACTIVAR</label>
						</div-->
					</div>
			</fieldset>
			
			<br><hr> <!--   BOTON DE AÑADIR -->
			<div><button type="submit" class="btn btn-secondary">Modificar Plato</button></div>
		
		</form>
<?php
			} // Fin del WHILE
		
		}else{
			echo '<p class="text-center">No se ha podido encontrar el registro.</p>';
		} // Fin del IF mysqli
	} // Fin del IF isset

?>
	
	</div>
<?php include "../includes/footer.php"; ?>

 