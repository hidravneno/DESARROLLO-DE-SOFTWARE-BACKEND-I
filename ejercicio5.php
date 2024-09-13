<?php 

// Este script genera un número aleatorio entre 1 y 100

$numero = rand(1, 100);

echo "El numero aleatorio es: $numero----";

if ($numero > 50) {
    echo "El numero es mayor que 50.";
} elseif ($numero < 50) {
    echo "El numero es menor que 50.";
} else {
    echo "El numero es igual a 50.";
}
?>