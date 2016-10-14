<?php
/* Crea una array asociativo con las cinco posiciones. 
En cada posición debes almacenar uno o más jugadores en un array ordenado. 
Muestra toda la plantilla usando listas no ordenadas html (ul y li)*/

echo "<b>EJERCICIO 3</b>" . "<br><br>";
$array = array (
    'base' => array ('Jose', 'Carlos')
    'escolta' => array ('Manuel', 'David')
    'alero' => array ('Diego', 'Gabriel')
    'alapivot' => array ('Pedro', 'Arturo'),
    'pivot' =>  array ('Leo', 'Nacho')
); 

echo "PLANTILLA <br>";
foreach ($array as $posicion => $elemento){
	echo "Posicion";
	foreach ($elemento as $nombres){
		echo "<li>" . $nombres . "</li>";
	}
}

?>