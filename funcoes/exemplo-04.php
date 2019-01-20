<?php


function foo()  {

$numargs = func_num_args();
echo "Number of arguments:  $numargs<br/>\n";
if ($numargs >= 4) {
	echo "Quarto argumento é: " . func_get_arg(3) . "<br>";
}


$arg_list = func_get_args();
for ($i = 0 ; $i < $numargs; $i++) {
	echo "Argument $i is: " . $arg_list[$i] . "<br/>\n";
}


}

foo(1, 3, 5, 7, 9, 12);

echo "<br>";
echo "<br>";

function foo2() {

	$qtdeArgumentos = func_num_args();
	if ($qtdeArgumentos >= 4) {
		echo "O quarto argumento é: " . func_get_arg(3) . "<br>";
	}

	$todosOsArgumentos = func_get_args();
	for ($i = 0; $i < $qtdeArgumentos; $i++) {
		echo "Argumento $i é: " . $todosOsArgumentos[$i] . "<br>";
	}


}

foo2(1, 2, 3, 4, 5, 6, 7);




?>
