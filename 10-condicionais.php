<?php
//If Else ElseIf Endif
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
echo "<hr>";


//Switch Case
$cor = "marrom";

switch ($cor):

    case "vermelho":
        echo "Sua cor escolhida foi o Vermelho";
    break;

    case "verde":
        echo "Sua cor escolhida foi Verde";
    break;

    case "azul";
        echo "Sua cor escolhida foi azul";
    break;

    default:
        echo "Você não escolheu nenhuma dessas cores, você escolheu ".$cor.". Tanso!";

endswitch;