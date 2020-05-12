<?php

//DATAS

date_default_timezone_set('America/Sao_Paulo');


echo date('d/m/Y');
echo "<br>";
echo date('l');
echo "<br>";
echo date ('d/m/Y H:i:s');
echo "<br>";

$date = date('Y-m-d'); //DATE
echo $date;

echo "<br>";

$datetime = date('Y-m-d H:i:s'); //DATETIME
echo $datetime;

echo "<br>";

//TIME
$time = time();
echo date('d/m/Y', $time);

echo "<hr>";

$data_pagamento = mktime(15, 30, 00, 05, 12, 2020);
echo date('d/m/Y - h:i', $data_pagamento);

echo "<hr>";

//STRTOTIME
$data = '2019-04-10 13:30:00';

$data = strtotime($data);
echo date('d/m/Y', $data);