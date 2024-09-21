<?php
$entero = 10;
$flotante = 3.14;


echo "El tipo de dato de la variable entero es: " .gettype($entero) ."<br>";
echo "El tipo de dato de la variable flotante es: " .gettype($flotante) ."<br>";

$resultado = $entero + $flotante;

echo "El resultado de sumar $entero y $flotante es: $resultado<br>";

echo "Multiplicando el entero por 10 es: " . ($entero * 10). "<br>";
echo "Multiplicando el flotante por 10 es: " . ($entero * 10). "<br>";
?>