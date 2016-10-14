<?php
/*
Vamos a hacer algo parecido al ejercicio1. 
En este caso usa arrays asociativos. Los indices que vas a usar son: base, escolta, alero, alapivot y pivot.
*/
echo "<b>EJERCICIO 2</b>" . "<br><br>";
$array = array (
    'base' => "Jose",
    'escolta' => 'Manuel',
    'alero' => 'Diego',
    'alapivot' => 'Maria',
    'pivot' =>  'Leo'
); 

foreach ($array as $posicion => $elemento){
	echo $posicion . ": " . $elemento . "<br>";
}
?>
