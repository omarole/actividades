<?php
session_start();

// Destruir las variables de sesión
session_unset();

// Terminar la sesión completamente
session_destroy();

// Vuelve a la pantalla del login
header("Location: login.php");
exit();
?>