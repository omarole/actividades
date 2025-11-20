<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="texto">Precio</label>
    <input type="number" name="precio">

    <label for="texto">Ciudad</label>
    <input type="text" name="ciudad">

    <label for="texto">Dominio</label>
    <input type="text" name="dominio">

    <label for="texto">Wifi</label>
    <input type="checkbox" name="wifi" id="wifi">

     

    <br><input type="submit" value="Calcular">

</form>

<?php 
$apartamentos=[];

if($_SERVER['REQUEST_METHOD']=="POST"){
    if ((!empty($_POST['precio']))&&(!empty($_POST['ciudad']))&&(!empty($_POST['dominio']))){
        $precio=$_POST['precio'];
        $ciudad=$_POST['ciudad'];
        $dominio=$_POST['dominio'];
        $checkbox=isset($_POST['wifi'])? true: false;
        if ($checkbox=='true'){
            $wifi="Si";
        } else {
            $wifi="No";
        }

        $apartamentos[]=[
            'precio'=>$precio,
            'ciudad'=>$ciudad,
            'dominio'=>$dominio,
            'wifi'=>$wifi
        ];
        
    } else{
        echo "ERROR";
    }

}
//echo json_encode($apartamentos, JSON_PRETTY_PRINT);
if (!empty($dominio)) {

    echo "<h2>apartamentos disponibles :</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>precio/noche</th>
            <th>ciudad</th>
            <th>wifi?</th>
            <th>pagina web</th>
          </tr>";

    /** recorremos cada apartamento y mostramos sus datos */
    foreach ($apartamentos as $dato) {
        echo "<tr>";
        echo "<td>" . $dato['precio'] . "</td>";
        echo "<td>" . $dato['ciudad'] . "</td>";
        echo "<td>" . $dato['wifi'] . "</td>";
        echo "<td>" . $dato['dominio'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>  
<input type="hidden" name="apartamentos" value='<?php echo json_encode($apartamentos); ?>'>


</body>
</html>
