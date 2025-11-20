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
        $pelis=[];

        //enviar informacion por el servidor
        if ($_SERVER['REQUEST_METHOD'] =="POST"){
            // recuperar info de lista oculta
            if(!empty($_POST['lista'])){
                $pelis=json_decode($_POST['lista']);
            }
        }        

        // recuperar peli
        if(!empty($_POST['nombre'])){
        $pelicula=isset($_POST['nombre'])? $_POST['nombre']: '';
        
        //añadir peli
        $pelis[]=$pelicula;
        }

        
    ?>  

<form method="post">

    <input type="hidden" name="lista" value='<?php echo json_encode($pelis); ?>'>
    <input type="text" name="nombre" placeholder="Escribe la peli">
    <input type='submit' value="Enviar">

</form>

<?php 
if(!empty($pelis)){
    echo "<table>";
    echo "<th><th>Nombre</th></th>";

    foreach($pelis as $p){
        echo"<tr><td>$p</td></tr>";
    }
    echo "</table>";
}


?>



</body>
</html>
