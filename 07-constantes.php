<?php

// Constantes - identificador para valor único.

define("NOME", "Gustavo Borges");
define("ALTURA", 1.80);
define("IDADE", 24);
define("CASADO", false);

define("TIMES", ['avaí', 'psg', 'flamengo']);

echo 'Meu nome é  '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.' metros .';
echo "<hr>";

echo TIMES [0];
var_dump(TIMES);


function exibeNome() {
    echo NOME;
}
exibeNome();