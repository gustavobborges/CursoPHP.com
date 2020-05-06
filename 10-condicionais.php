<?php

$numero = 8;

if ($numero == 10):
    echo "O número é igual a 10";
elseif ($numero <= 9):
    echo "É menor ou igual a 9";
else:
    echo "O é maior que 10";
endif;

echo "<hr>";


//Operador Ternário
$media = 5;

echo ($media >= 7) ? "Aprovado" : "Reprovado";
