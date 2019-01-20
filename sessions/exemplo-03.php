<?php

session_id('v271ae74j5tdpe39p48gmfumjl');

require_once("config.php");


echo session_id();

//na pagina de login, na pagina que valida o login, é ideal usar esse recurso
//session_regenerate_id();

var_dump($_SESSION);






?>