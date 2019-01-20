<?php


require_once("config.php");


var_dump(session_status());

echo "<br>";

switch(session_status()) {
	case PHP_SESSION_DISABLED:
		echo "A Sessão está desabilitada";
		break;

		case PHP_SESSION_NONE:
		echo "A Sessão não está em uso";
		break;

		case PHP_SESSION_ACTIVE:
		echo "A Sessão está em uso";
		break;
	
	
}



?>