<?php  
$var = 2;
	try {
		if($var == 1){
			echo 'var es igual a 1';
		} else if($var == 2){
			throw new Exception("Var es igual a 2");
		} else 
		throw new Exception('ERROR: var no es igual a 1 y tampoco es igual a 2');
		
		
	} catch (Exception $e) {
		echo $e-> getMessage();
	}

?>