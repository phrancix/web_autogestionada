<?php

	function consulta_lista($cons){
		
		echo '<br>';
		echo '<ul class="list-unstyled">';
		while($reg = mysqli_fetch_array($cons)){
			echo '<li>'.$reg['nombre_plato'].'</li>';
		} 
		echo '</ul>';
	}


?>