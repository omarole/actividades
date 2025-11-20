<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="number" name="num" placeholder="Numero de mails">
    <input type="submit" value="Calcular">
<br>
    <label for="texto">Marcar la casilla si quiere un seguro (0.1€ por mensaje)</label>
    <input type="checkbox" name="seguro">

</form>

<br>
<?php 
$mails=0;
$precio=0;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty($_POST['num'])){
        $mails=$_POST['num'];
        $checkbox=isset($_POST['seguro'])? true: false;
     }
} 

//verifica que haya al menos un mail
if($mails>0){
    //rango de mails 2000 - 10000
    if($mails>2000 && $mails<=10000){
        $precio=$mails*0.7;
    //si hay más de 10000 mails
    } elseif($mails>10000){
        $precio=$mails*0.2;
    }

    //cálculo del seguro
    if($checkbox==true){
        $precio=$precio+$mails*0.1;
    }
}

echo "El precio es: $precio €";

?>  

</body>
</html>
