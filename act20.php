<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

$ticket=[];

$mensaje="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (!isset($ticket[0])){
        $ticket[0]=0;
    }
}

    ?>  

<form method="post">

    <input type='hidden' name='datos' value='<?php  ?>'>
    <input type="text" name='altura' placeholder="Altura">
    <input type="text" name='edad' placeholder="Edad">
    <input type='submit'>

</form>



</body>
</html>
