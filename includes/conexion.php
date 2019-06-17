
<?php

// Establecemos la conexión con la base de datos WEB-AUTOGESTIONADA.
	$conex = mysqli_connect('localhost', 'root', '', 'web_autogestionada') or die ('No se ha podido conectar con la Base de Datos '.$base);
	mysqli_set_charset($conex,"utf8");

?>