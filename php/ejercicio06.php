<?php
	if(isset($_GET) && !empty($_GET)){
		echo "Nombre: $_GET[nombre] <br>";
		echo "Apellidos: $_GET[apellidos] <br>"; 
		echo "Edad $_GET[edad] <br>";
		echo "Sexo: $_GET[genero] <br>";
	}
?>