<?php 
session_start();

// Si no hay sesión, va al login
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido, 
        <?php echo htmlspecialchars($_SESSION['usuario']); // htmlspecialchars: muestra el contenido como texto plano
          ?></h1>
    <h2>Esta es la página protegida por sesión</h2>
    <p>Ahora vete</p>

    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>