<?php
    session_start();

    $usuarioAdmin="admin";
    $contraAdmin="1234";

    $usuarioUser="user";
    $contraUser="4321";

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
    

        if(($username===$usuarioAdmin) && ($password===$contraAdmin)){
            echo "Login correcto. Redirigiendo a página admin...";
            $_SESSION['usuario']=$username;
            //header("Location: index.php");
            //exit();

            } else{
                if(($username===$usuarioUser) && ($password===$contraUser)){
                    echo "Login correcto. Redirigiendo a página usuario...";
                    $_SESSION['usuario']=$username;
                    //header("Location: index.php");
                    //exit();

            } else{
                $error = "Usuario o contraseña incorrectos";
            }
        }            
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form method="post">
        <?php
        // Error que solo sale si el login es incorrecto
        if (isset($error)){
            echo "<p style='color:red;'>$error</p>";}
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