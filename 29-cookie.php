<?php

//COOCKIE
setcookie('user', 'Gustavo Borges', time()+3600); //time está em segundo. 3600 = 1 hora
setcookie('email' , 'gustavoborges98@hotmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

echo $_COOKIE['ultima_pesquisa'];