<?php

//********* Escalares **********/

// string
$nome = 42;
var_dump($nome);
if(is_string($nome)):
    echo "É uma String!";
else:
    echo "Não é uma String!";
endif;
echo "<hr>";

// int
$idade = 25;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro!";
else:
    echo "Não é um inteiro!";
endif;
echo "<hr>";

// float
$altura = 1.80;
var_dump($altura);
if(is_float($altura)):
    echo "É um float!";
else:
    echo "Não é um float!";
endif;
echo "<hr>";

//boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "A validação é um boleano!";
else:
    echo "A validação não é um boleano!";
endif;
echo "<hr>";


//************** Compostos *****************//
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);


// object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->nome = $nome;       
    }
}

$cliente = new Cliente();
$cliente-> atribuirNome("Gustavo");
var_dump($cliente);

if(is_object($cliente)):
    echo "A validação é um objeto!";
else:
    echo "A validação não é um objeto!";
endif;
echo "<hr>";



/************* Especiais  **************/
//NULL
$cidade = NULL;
var_dump($cidade);

// Resource