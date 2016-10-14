<?php
/*Crea dos funciones llamadas mayor y menor. 
Cada una de ellas debe recibir un array numérico y devolver el valor mayor y menor respectivamente. */
echo "<b>EJERCICIO 4</b>" . "<br><br>";
$arraynum[] = 5;
$arraynum[] = 6;
$arraynum[] = 7;
$arraynum[] = 8;

echo "Numeros: ";
foreach($arraynum as $elemento){
	echo $elemento . ", ";
}
echo "<br>";

function mayor ($arraynum){
	$mayor = "0";
	foreach($arraynum as $elemento){
		if($elemento > $mayor){
			$mayor = $elemento; 
		}
	}
return $mayor;
}

function menor ($arraynum){
	$menor = mayor($arraynum);
	foreach($arraynum as $elemento){
		if ($elemento < $menor){
			$menor = $elemento;
		}
	}
return $menor;
}
echo "Número mayor: " . mayor($arraynum) . "<br>";
echo "Número menor: " . menor($arraynum) . "<br>";
?>