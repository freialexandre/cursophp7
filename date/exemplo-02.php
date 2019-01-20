<?php




$dt = new Datetime();



echo $dt -> format("d/m/Y H:i:s");	

echo "<br>";




$periodo = new DateInterval("P15D");

$dt ->  add($periodo);

echo "Data inicial mais 15 dias:" . "<br>";
echo $dt -> format("d/m/Y H:i:s");	



echo "<br>" . "<br>";

$dataHoje = new Datetime();

echo "Data de hoje: " . $dataHoje->format("d/m/Y H:i:s");

$periodo = new DateInterval("P30D");

$dataHoje -> add($periodo);

echo "<br>" . "<br>";

echo "Novo periodo: " . $dataHoje->format("d/m/Y H:i:s");


?>