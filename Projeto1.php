<?php

$num = (int)$_GET['num'];
print("valor = " .$num);
echo "<br>";

if ($num > 10){
    echo "O Numero digitado e maior que 10";
    } 
elseif($num == 10){
    echo "O Numero digitado e igual a 10";
    }
else{
    echo "O Numero digitado e menor que 10";

    }





?>