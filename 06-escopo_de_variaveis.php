<?php

// ESCOPO GLOBAL
$nome = "Gustavo Borges";
$a = 1;
$b = 3;
$c = 7;


function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

//////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "Florianópolis";
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();