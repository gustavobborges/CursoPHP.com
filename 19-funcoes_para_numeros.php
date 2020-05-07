<?php

//funções para números

/*
number_format - fromata o numero
round - arredonda
ceil - arredonda pra cima
floor - arredonda para baixo
rand - gera um um numero aleatorio entre os indicados

*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo $preco;

echo "<hr>";

echo round(3.6);
echo round(3.4);
echo round(3.5);

echo "<hr>";

echo ceil(8.1);

echo "<hr>";

echo floor(9.9);

echo "<hr>";
echo rand(1,20);
