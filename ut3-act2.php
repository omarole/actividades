<?php
// Saludos soportados
$saludos = [
    "ES" => "Bienvenido",
    "EN" => "Welcome",
    "IT" => "Benvenuto",
    "FR" => "Bienvenue"
];

// Borrar cookies si se solicita
if (isset($_GET['clear'])) {
    setcookie('idioma', '', time() - 3600, '/');
    setcookie('color', '', time() - 3600, '/');
    header('Location: ut3-act2.php');
    exit;
}

// Procesar el formulario si se ha enviado
if (isset($_GET["idioma"]) && isset($_GET["color"])) {
    $newIdioma = strtoupper(trim($_GET['idioma']));
    $newColor = trim($_GET['color']);

    // Validar idioma sólo si está en la lista de salutaciones
    if (array_key_exists($newIdioma, $saludos)) {
        setcookie("idioma", $newIdioma, time() + 86400, '/');
    }

    // Validar color (hex de 6 dígitos con '#')
    if (preg_match('/^#[0-9A-Fa-f]{6}$/', $newColor)) {
        setcookie("color", $newColor, time() + 86400, '/');
    }

    header("Location: ut3-act2.php");
    exit;
}

// Leer cookies si existen
$idioma = $_COOKIE["idioma"] ?? null;
$color = $_COOKIE["color"] ?? "#ffffff";

// Validar color proveniente de la cookie
if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $color)) {
    $color = '#ffffff';
}

// Determinar saludo
$saludo = $saludos[$idioma] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($color, ENT_QUOTES); ?>">
    <?php if ($saludo): ?>
    <h1><?= $saludo ?></h1>
    <p><a href="ut3-act2.php?clear=1">Cambiar idioma y color</a></p>
        <?php else: ?>
        <h1>Elige idioma</h1>
        <form method="get">
            <button type="submit" name="idioma" value="ES">🇪🇸 Español</button>
                <button type="submit" name="idioma" value="EN">🇬🇧 English</button>
                <button type="submit" name="idioma" value="IT">🇮🇹 Italiano</button>
                <button type="submit" name="idioma" value="FR">🇫🇷 Français</button>
                <br>
                      <label for="color">Color de fondo:</label>
            <input type="color" name="color" id="color" value="#ffffff">
      
        </form>
    <?php endif; ?>

 
</body>
</html>
