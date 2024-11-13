<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registro de Usuarios</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        echo "<h2>Datos Registrados</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
    }
    ?>

    <form action="register.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Registrarse">
    </form>

    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>
