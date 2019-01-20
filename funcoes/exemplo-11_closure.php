<?php

$a = 100;
$parametro = $a*100;
$outraVariavel = 500;

$var = function ($parametro) use ($outraVariavel) {

$retorno = $parametro + $outraVariavel;

return $retorno;

};


echo $var($parametro);



?>