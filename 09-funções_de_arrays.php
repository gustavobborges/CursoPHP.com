<?php

$nomes = array("Primo"=> "Gustavo", "Vizinho"=> "Juliana", "Mãe"=> "Márcio", "Pai"=> "José");

//Verifica se é um array
if (is_array($nomes)):
    echo "É um array!";
else:
    echo "Não é um array";
endif;
echo "<hr>";

//Verifica se existe no array
if(in_array("Gustavo", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe";
endif;
echo "<hr>";

//Retorna novo array com chaves do array passado como parametro
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

//Retorna novo array com os parâmetros do array passado como parâmetro
$values = array_values($nomes);
print_r($values);
echo "<hr>";

//Agrega os conteúdos de 2 arrays
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "CB300", "CB1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

//Exclui a ultima posição do array
//array_pop($carros);
//echo "<br>";
//echo array_pop($carros);
//echo "<br>";
//print_r($carros);
//echo "<hr>";

//Exclui a primeira posição do array
//echo "<br>";
//echo array_shift($carros);
//echo "<br>";
//print_r($carros);
//echo "<hr>";

//Adicionar um ou mais elementos no inicio do array
$frutas = array("uva", "laranja", "maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "banana", "goiaba", "carambola");
print_r($frutas);
echo "<hr>";

//Adiciona um ou mais elementos no final do array
print_r($frutas);
echo "<br>";
array_push($frutas, "banana", "goiaba", "carambola");
print_r($frutas);
echo "<hr>";

//Mescla dois arrays
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Avaí | ", "Flamengo | ", "Botafogo | ");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";


//Calcula a soma dos valores dentro do array
$soma = array(5, 6, 10, 8);
echo array_sum($soma);
echo "<br>";
    //ou..
$total = array_sum($soma);
echo $total;
echo "<hr>";

//Transforma uma String em array -- EXPLODE --
$data = "30/02/2020";

$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";

$frase = "Meu nome não é Jhonny";

$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

//Transforma um array em uma String -- INPLODE --
$nomes2 = array("Joana", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes2);
echo $string;
echo "<hr>";
