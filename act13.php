<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$anioNac = 1925;
$anioActual = date("Y");
$mesActual = date("m");
$diaActual = date("d");

$edad= $anioActual - $anioNac;

//1
echo ($edad>=18) ? 'Pasa! ':'No pasas! ';

if ($edad>=65){
    echo 'Pero ya tienes una edad...';
    };

echo '<br>';

//2
if ($edad>=18 && $edad<65){
    echo 'Pasa!';
    } elseif ($edad>=65) {
        echo 'Estás mayor';
    } else {
        echo 'Tas chiquito';
    };

?>  

</body>
</html>
