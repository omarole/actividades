<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

echo '<h1>Introduce dia nacimiento</h1>';

echo "<select name="dia" id="dia">";

foreach(range(1,31)as $num){
echo "<option>$num</option>";
}

echo "</select>";

?>  

</body>
</html>
