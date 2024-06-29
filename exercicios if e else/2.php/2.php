<?php 

$idade = $_GET["idade"];
$trab = $_GET["trab"];

if(($idade > 57) || ($trab > 30) || ($idade > 57 && $trab > 25)){
    echo "O senhor pode se aposentar";}
    else{echo "Você ainda não pode se aposentar";}
 



?>