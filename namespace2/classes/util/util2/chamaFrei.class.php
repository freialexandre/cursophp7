<?php

namespace classes\util\util2;


 class chamaFrei extends \classes\util\Timer {
	
	 function chama() {
		echo "Chamando Frei!" ."<br />";
	}
	
	function chama2() {
			echo "Chamando Frei usando classe Timer: " . \classes\util\Timer::getNow();

	}


}



?>