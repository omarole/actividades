<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$relato = 'El sillón de mi abuela es más comodo que el de Ikea';
echo count(preg_split('/[\s,]+/', $relato));

?>  

</body>
</html>
