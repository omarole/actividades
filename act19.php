<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //crear array
        $alumnos=[];

        //enviar informacion por el servidor
        if ($_SERVER['REQUEST_METHOD'] =="POST"){
            // recuperar info de lista oculta
            if (!empty($_POST('lista'))){
                $alumnos= json_decode($_POST('lista'))
            }            
        }      
       
        // recuperar nombre
        

       
        //añadir peli
        
        
    ?>  

<form>

    <input type='hidden' name='lista' value='<?php echo json_encode($pelis); ?>'>
    <input type="text" name='nombre'>
    <input type="text" name='nota'>
    <input type='submit'>

</form>



</body>
</html>
