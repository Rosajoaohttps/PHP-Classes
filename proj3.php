<?php
$valor = 1;

$contagem = (int)$_POST['contagem'];
echo "o valor da contagem é = $contagem";
echo "<br/>";


do{
    echo "O valor atual é  $valor <br/>";
    $valor++; 




}while($valor<=$contagem);



































?>