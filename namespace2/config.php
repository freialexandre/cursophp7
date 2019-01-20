<?php





//define("HOME", getEnv("DOCUMENT_ROOT")."/teste/");
 
spl_autoload_register(function ($class) {

	var_dump($class) . "<br/>";
	
 
 $nome = str_replace("\\", "/" , $class . '.class.php');
 
 if( file_exists( $nome ) ){
 include_once( $nome );
 }
 
});


?>