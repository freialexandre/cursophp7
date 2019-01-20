<html>

<body>

<?php

$qualASuaIdade = 14;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($_POST) {

$idade = $_POST['idade'];

if($idade <= 12) {
	echo 'Você é: <strong> criança </strong><br>';
} elseif($idade < 18) {
	echo 'Você é: <strong> adolescente </strong><br>';
} elseif($idade < 65) {
	echo 'Você é: <strong> adulto </strong><br>';
} else {
	echo 'Você é <strong>idoso!</strong>';
}

}

?>


<br>

<br>
<p>Qual é a sua idade?</p>
<form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
	<input type="text" name="idade">
	<input type="submit" value="enviar">
</form>


</body>
</html>
