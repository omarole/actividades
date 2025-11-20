<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$censo = [
    'España' => 49315949,
    'Portugal' => 10639726,
    'Francia' => 68635943
];

asort($censo, SORT_DESC);
var_dump($censo);
?>  

</body>
</html>
