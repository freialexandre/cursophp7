<?php

//autoload para utilizar com os namespaces

// var_dump($nameClass);



/*
spl_autoload_register(function($nameClass) {
	//$dirClass = "class";
	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

	if (file_exists($filename)) {
		require_once $filename;
		}
	});
*/



spl_autoload_register(function ($class) {
 $pastaNivel1 = "classes";
 $nome = str_replace("\\", "/" , $pastaNivel1 . DIRECTORY_SEPARATOR . $class . '.php');
 
 if( file_exists( $nome ) ){
 include_once( $nome );
 }
 
});




?>