<?php include "../includes/header.php"; ?>
<?php include "../includes/nav-admin.php"; ?>
	
	<div class='container'>
	
		<h1> AÑADIR NUEVO PLATO </h1>
		<hr>
		<form class='text-center' method='post' action='agregar-plato.php'>
		
			
					<div class="form-group"> <!--   INTRODUCIR PLATO -->
						<label for="nombre_plato">Nombre del Plato</label>
						<input type="text" class="form-control" name='nombre_plato' id="nombre_plato" aria-describedby="emailHelp" placeholder="Introduce el plato" autofocus required>
					</div>
					
					<div class="form-group"> <!--   INTRODUCIR PRECIO -->
						<label for="precio_plato">Precio del Plato</label>
						<input type="text" class="form-control" name='precio_ud' value=0.00 id="precio_plato" aria-describedby="emailHelp" placeholder="€">
						<small id="emailHelp" class="form-text text-muted">Introduce el precio con dos decímales precedidos de un punto (p.e. 2.50) sin el símbolo €.</small>
					</div>
			
			
			<fieldset class='border border-secondary p-2'> <!--   INTRODUCIR ORDEN -->
				<legend>Selecciona el Orden del Plato (primero, segundo o postre)</legend)>
					<div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="prim" value="primero" required checked>
							<label class="form-check-label" for="prim">PRIMERO</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="segu" value="segundo">
							<label class="form-check-label" for="segu">SEGUNDO</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="orden_plato" id="post" value="postre">
							<label class="form-check-label" for="post">POSTRE</label>
						</div>
					</div>
			</fieldset>
			<br><br>

			<fieldset class='border border-secondary p-2'> <!--   INTRODUCIR ACTIVO -->
				<legend>Activa o Desactiva este plato</legend)>
					<div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name='menu_activo' id="act" value=1 checked>
							<label class="form-check-label" for="act" >Activar plato en el menú</label>
						</div>
						<!--div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name='menu_activo' id="ina" value=0>
							<label class="form-check-label" for="ina">DESACTIVAR</label>
						</div-->
					</div>
			</fieldset>
			
			<br><hr> <!--   BOTON DE AÑADIR -->
			<div><button type="submit" class="btn btn-secondary">Agregar Plato</button></div>
		
		</form>
		
	</div>
		
<?php include "../includes/footer.php"; ?>