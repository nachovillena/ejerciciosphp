<?php
/*Paso por referencia. Crea una función que ordene un array de menor a mayor. */

$arraynum[] = 6;
$arraynum[] = 9;
$arraynum[] = 8;
$arraynum[] = 2;
$arraynum[] = 1;
$arraynum[] = 10;

echo "Array desordenado: ";
foreach($arraynum as $elemento){
	
}
function ordenarArray(&$arraynum){
	$mayor = "0";
	foreach($arraynum as $elemento){
		if($elemento > $mayor){
			$mayor = $elemento; 
		}
	}
	$menor = $mayor;
	foreach($arraynum as $elemento){
		if ($elemento < $menor){
			$menor = $elemento;
		}
	}
	$cont = 0;
	$arraynum[0] = $menor;
	$numero = 0;
	foreach($arraynum as $elemento){
		$numero = $elemento
		foreach($arraynum as $elemento2){

		}
	}
}


?>