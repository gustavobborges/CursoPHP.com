<?php

// Criando funções

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("Gustavo Borges");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    echo "$media <br>";
    if ($media >= 7):
        echo "$nome foi aprovado com a média $media.<br>";
    else:
        echo "$nome foi reprovado. Que pena :(.<hr>";   
    endif;
}
calcularMedia("Gustavo", 8, 5, 7, 9);
calcularMedia("João", 2, 5, 4, 10);
calcularMedia("André", 2, 5, 4, 10);
