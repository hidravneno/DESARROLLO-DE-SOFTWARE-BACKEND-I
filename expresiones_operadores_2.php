<?php
$num1 = 15;
$num2 = 8;

echo "Suma: " .($num1 + $num2) ."<br>";
echo "Resta: ".($num1 - $num2) ."<br>";
echo "Multiplicacion: ".($num1 * $num2) ."<br>";
echo "Division: ".($num1 / $num2) ."<br>";
echo "Modulo: ".($num1 % $num2) ."<br>";

echo "¿$num1 es mayor que $num2? " . var_export($num1 > $num2, true) ."<br>";
echo "¿$num1 es igual a $num2? " . var_export($num1 == $num2, true) . "<br>";

echo "¿$num1 es mayor que 10 y $num2 es menor que 10? " . var_export($num1 > 10 && $num2 < 10, true) . "<br>";

?>