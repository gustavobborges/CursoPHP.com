<?php

/*
//Superglobais

$GLOBALS - armazena todas as variaveis globais em um array
$_SERVER - array que contém informações sobre caminhos, índices
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();
echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";

echo $_SERVER['SERVER_NAME']."<br>";

echo $_SERVER['SCRIPT_FILENAME']."<br>";

echo $_SERVER['DOCUMENT_ROOT']."<br>";

echo $_SERVER['SERVER_PORT']."<br>";

echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";



///////////////////
/*
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/