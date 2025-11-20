<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$agenda = 
['dentista12','futbol18', 'cosa3', 'otra cosa', 'si'];
var_dump($agenda);

echo '<br>';


$agenda[0] = 'dentista16';
var_dump($agenda);

echo '<br>';

unset($agenda[0]);
var_dump($agenda);

echo"<li>";

foreach($agenda as $lista){
    
    echo "<ul>$lista</ul>";
}

echo"</li>";
?>  

</body>
</html>
