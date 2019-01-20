<?php




echo "<br>";

echo "Data de hoje é: " . date("d/m/Y  H:i:s") . "<br>";


echo time();

echo "<br>";
echo "<br>";

//gerando timestamp de uma data (string), para ser manipulado posteriormente
$ts = strtotime("2001-09-11");
//aceita diversas expressões, dia, mês, hora, minuto, soma, etc
$ts2 = strtotime("tomorrow");

echo "Variavel ts - string de data convertida para timestamp: " . $ts . "<br>";
 
echo date("l, d/m/Y", $ts);
echo "<br>";

echo date("l, d/m/Y", $ts2);

echo "<br>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B %G");


?>