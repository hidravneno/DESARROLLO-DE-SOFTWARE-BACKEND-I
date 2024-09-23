<?php
  session_start();
  // Crear una nueva sesión o reanudar una existente

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar si se enviaron las variables 'username' y 'password'
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificar las credenciales
        if ($username === "nombre@cesun.edu.mx" && $password === "12345") {
            $_SESSION["loggedin"] = true; // Iniciar sesión
            header("Location: Task_Manager.php"); // Redirigir al Task Manager
            exit;
        } else {
            $error = "Credenciales incorrectas. Inténtalo de nuevo."; // Mensaje de error
        }
    } else {
        //$error = "Por favor, introduce tanto el nombre de usuario como la contraseña."; // Error si no están definidos los campos
    }
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    
                    <!-- Mostrar el mensaje de error si existe -->
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Formulario de login -->
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                        </div>
                        <div class="mb-3">  
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>