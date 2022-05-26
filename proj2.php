<?php

$dia = (int)$_GET['dia'];

echo "O numero do dia da semana digitado foi = $dia";

echo "<br/>";

switch ($dia){
    case 1: 
        echo "Domingo";
        break;
    case 2: 
        echo "Segunda-feira";
        break;
    case 3: 
        echo "terça-feira";
        break;
    case 4: 
        echo "quarta-feira";
        break;
    case 5: 
        echo "quinta-feira";
        break;
    case 6: 
        echo "sexta-feira";
        break;
    case 7: 
        echo "Sabado";
        break;
    default:
        echo "Não e um dia Valido";
        break;

}       
?>