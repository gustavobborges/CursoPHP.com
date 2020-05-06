<?php

//for (COMEÇO DO CONTADOR; CONDIÇÃO; O INCREMENTO):
for ($contador = 0; $contador <= 15; $contador++):
    echo "8 x $contador = ".($contador*8)."<br>";
endfor;


echo "<hr>";

$cores = array("azul, vermelho, verde, roxo");

//foreach (LISTA A PERCORRER as POSICAO DO ARRAY (OPCIONAL) => VALOR) -> foreach($cores as $valor);
foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;