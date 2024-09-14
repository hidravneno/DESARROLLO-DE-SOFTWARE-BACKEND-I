<?php
// Declaración de una cadena de texto
$texto = "Bienvenido al mundo de PHP";

// Operaciones con cadenas
echo "Longitud: " . strlen($texto) . "<br>";  // Longitud de la cadena
echo "Reemplazo: " . str_replace("PHP", "programación", $texto) . "<br>";  // Reemplazo de subcadena
echo "Subcadena: " . substr($texto, 12, 5) . "<br>";  // Extrae una subcadena desde la posición 12
?>
