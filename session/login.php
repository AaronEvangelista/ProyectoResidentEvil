<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso - Trivia Survival</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <div class="contenedor">
        <h1>Ingreso</h1>

        <form action="login.php" method="POST">
            <div class="grupo-input">
                <label for="login-usuario">Nombre de Superviviente:</label>
                <input type="text" id="login-usuario" name="usuario" required>
            </div>

            <div class="grupo-input">
                <label for="login-password">Contraseña:</label>
                <input type="password" id="login-password" name="password" required>
            </div>

            <button type="submit">Entrar a la Mansión</button>
        </form>

        <p style="margin-top: 20px;">
            <a href="../index.php" class="enlace-cambio">Volver al inicio</a>
        </p>
    </div>

</body>

</html>