<?php
$texto = "Bienvenido al mundo de PHP";
echo "Longitud: " . strlen($texto) . "<br>";
echo "Reemplazo: " . str_replace("PHP", "programación", $texto) . "<br>";
echo "Subcadena: " . substr($texto, 12, 5) . "<br>";
?>
