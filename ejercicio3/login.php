<?php
    session_start();

    $usuariobueno="admin";
    $contrabuena="1234";

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
          
        // Valideishon
        if(($username===$usuariobueno) && ($password===$contrabuena)) {
            echo "Login correcto. Redirigiendo...";
            $_SESSION['usuario']=$username;
            header("Location: perfil.php");
            exit();
        } else{
            $error = "Usuario o contraseña incorrectos";
        }
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
    <form method="post">
        <?php
        // Error que solo sale si el login es incorrecto
        if (isset($error)){echo "<p style='color:red;'>$error</p>";}
        ?>

        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>