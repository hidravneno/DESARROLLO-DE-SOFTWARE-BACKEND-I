<?php

// Este script calcula el factorial de un número

$numero = 7;
$factorial = 1;

for ($i =1; $i <= $numero; $i++); {
    $factorial *= $i;
}
echo "El factorial de $numero es: ". $factorial;

?>