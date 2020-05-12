<?php

//$string = "gustavo@gmail.com";
//$padrao = "/^[a-z0-9]+$/i"; //Letras de A a Z e 0  O 9. i para indicar maiuscula ou minuscula / {} - numero de ocorrencias
//$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

$string = "12/05/2020";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;

