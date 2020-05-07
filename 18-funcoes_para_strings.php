<?php 

//Funções para Strings:
/*

strtoupper - CONVERTE TUDO PARA MAÍSCULO
strtolower - converte tudo para minúsculo
substr - pega uma parte da String -  Mensagem, Início, Tamanho
str_pad - acrescenta - Mensagem, quantidade de caracteres q tera a string, caracteres para ocupar, lado
str_repeat - repetir uma stirng - (string, quantidade de vezes)
strlen - traz o comprimento da string
str_replace - substitui (texto a ser subtituido, o novo texto, String)
strpos - traz a posição dentro da string

*/

$nome = "gustavo borges";

$nomeMaiúsculo = strtoupper($nome);

echo $nomeMaiúsculo;

echo "<hr>";

$mensagem = "Olá mundo!";
echo substr($mensagem, 5, 2);// Mensagem, Início, Tamanho

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 20, "*", STR_PAD_LEFT);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso!<br>", 5);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "o Lion será campeão em 2020. Ossa!";
$novoTexto = str_replace("Lion", "Avaí", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "campeão");







