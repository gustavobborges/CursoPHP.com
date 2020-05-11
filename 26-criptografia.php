<?php
$senha = "123123";

//base64
$novasenha = base64_encode($senha);

echo "base64: ".$novasenha."<br>";

echo "sua senha é: ".base64_decode($novasenha);

echo "<hr>";

//md5
echo "Md5: ". md5($senha);

//sha1
echo "Sha1: ". sha1($senha);

echo "<hr>";


$senha = "123123";
$senha_db = '$2y$10$Y0P8v.2gFihRIwt2UC8m7e8SJKrMgPDxth2odmDOffmk5zqVwJSJe';

if(password_verify($senha, $senha_db)):
    echo "Senha válida!";
else:
    echo "Senha inválida!";
endif;

/*
$options = [
    'cost' => 10,
]; //qto maior o cost mais seguero, mas consome mais memoria de processamento -- 10 é padrã////o

$senhasegura = password_hash($senha, PASSWORD_DEFAULT, $options);//não precisa quando for 10); //por padrao faz o bcrypt -(pode gerar ate 255 caractere - sempre diferente

echo $senhasegura;
*/

