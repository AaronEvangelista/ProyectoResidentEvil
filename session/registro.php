<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Trivia Survival</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <div class="contenedor">
        <h1>Nuevo Recluta</h1>

        <form action="registro.php" method="POST">
            <div class="grupo-input">
                <label for="reg-usuario">Nombre de Superviviente:</label>
                <input type="text" id="reg-usuario" name="usuario" required>
            </div>
            
            <div class="grupo-input">
                <label for="reg-personaje">Elige tu Personaje:</label>
                <select id="reg-personaje" name="personaje" style="width: 100%; padding: 10px; background-color: #111; color: #fff; border: 1px solid #555; font-family: inherit;">
                    <option value="jill">Jill Valentine (+1 espacio inicial)</option>
                    <option value="chris">Chris Redfield (+1 resistencia)</option>
                    <option value="leon">Leon S. Kennedy (1 pista extra)</option>
                </select>
            </div>

            <div class="grupo-input">
                <label for="reg-password">Contraseña:</label>
                <input type="password" id="reg-password" name="password" required>
            </div>
            
            <button type="submit">Registrarse</button>
        </form>
        
        <p style="margin-top: 20px;">
            <a href="../index.php" class="enlace-cambio">Volver al inicio</a>
        </p>
    </div>

</body>
</html>