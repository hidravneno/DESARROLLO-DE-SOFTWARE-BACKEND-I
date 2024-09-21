<?php
$correo = "test_user@example.com";

echo "El correo definido es: $correo<br>";

if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo)) {
    echo "El correo es válido.<br>";
} else {
    echo "El correo no es válido.<br>";
}

$usuario = substr($correo, 0, strpos($correo, '@'));
echo "El nombre de usuario es: $usuario<br>";
?>
