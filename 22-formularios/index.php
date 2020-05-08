<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*
////sanitização  - serve para limpar as variaveis
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS - faz os códigos n terem efeito.
FILTER_SANITIZE_NUMBER_INT - lipa os dados e deixa só o inteiro
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php
if(isset($_POST['enviar-formulario'])):
    // Array de erros:
    $erros = array();

    //Sanitize
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um número inteiro!";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "O email precisa ser válido!";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_EMAIL)):
        $erros[] = "A URL precisa ser válida!";
    endif;

    // Exibindo mensagens
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados foram salvos!";
    endif;
endif;
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
    </form>

</body>
</html>

<!--
Validações:

Funções (filter_input - filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
--
  if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "ERROR. Idade precisar ser um inteiro.";
   endif;

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "ERROR. Email inválido.";
    endif;

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "ERROR. Peso precisar ser um float.";
    endif;

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "ERROR. IP inválido.";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "ERROR. URL inválida.";
    endif;

    // Exibindo mensagens
   if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados foram salvos!";
    endif;
endif;
?>
-->