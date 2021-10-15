<?php

$opera = $_POST['opera'];
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$resul = 0;

if ($opera == 1) {

    $resul = $valor1+$valor2;
    header("Location: index.php?cal=$resul");

}else if($opera == 2){

    $resul = $valor1-$valor2;
    header("Location: index.php?cal=$resul");

}else if ($opera == 3) {
    
    $resul = $valor1*$valor2;
    header("Location: index.php?cal=$resul");

}else {
    
    $resul = $valor1/$valor2;
    header("Location: index.php?cal=$resul");

}

?>