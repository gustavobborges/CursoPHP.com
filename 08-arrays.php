<?php

$carro1 = "Bmw";
$carro2 = "Hilux";
$carro3 = "Kicks";

$carros = array("BMW", "Hilux", "Kicks", 10=>"Gol");

echo $carros[0];
echo "<br>";
echo $carros[10];
echo "<br>";
print_r($carros);

echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos); 
echo "<br>";
var_dump($motos);

$clientes = ["Juliana", "Gustavo", "Márcio"];
print_r($clientes);

echo "<br>";

//Count
echo count($carros);
echo count($motos);
echo count($clientes);

echo "<br>";

$totalClientes = count($clientes);

echo $totalClientes;

echo "<br>";
echo "<hr>";

// For each = para cada
foreach($carros as $valor) {
    echo $valor."<br>";
}

echo "<hr>";

// Array associativo

$pessoa = array("nome" => "Gustavo", "idade" => 25, "altura" => 1.75);
$pessoa["cidade"] = "Floripa";

foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

// Array multidimensionais
$times = array(
        "cariocas"=> array("vasco", "Flamengo", "Fluminense"),
        "paulistas"=> array("São Paulo", "Palmeiras", "Ponte Preta"),
        "catarinenses"=> array("campeao"=> "Avaí", "vice"=> "Chapecoense", "terceiro"=> "Criciúma")
    );
echo $times["catarinenses"]["campeao"];
echo "<hr>";
foreach($times["catarinenses"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}