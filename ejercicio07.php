<?php
require_once 'Rectangulo.php';

$rectangulo = new Rectangulo(20,12);

echo "Base: " . $rectangulo->getBase() . "<br>";
echo "Altura: " . $rectangulo->getAltura() . "<br><hr>";
echo "Perimetro: " . $rectangulo->perimetro() . "<br>";
echo "Superficie: " . $rectangulo->superficie() . "<br>";
?>