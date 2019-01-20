<form>

	<input type="text" name="nome"><br>
	<input type="date" name="nascimento"><br>
	<input type="submit" value='OK'>

</form>



<?php

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {
		
	//	echo "Nome do campo: " . $key . "<br>";
		echo "valor do campo: " . $value . "<br>";

	}


}



?>