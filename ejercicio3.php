<?php
// Este script genera la tabla de multiplicar de un número

$numero = 7;

echo "Tabla de multiplicar del $numero:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>
