<?php  

	/*variable que verifica si hay una variable view*/
	$view = isset($_GET['view']) ? $_GET['view'] : 'index';

	require('core/libs/smarty/Smarty.class.php');

	/*Sentencia if que verifica si existe el controller en la carpeta controllers*/
	if(file_exists('core/controllers/'.$view.'Controller.php')){
		include('core/controllers/'.$view.'Controller.php');
	}else{
		//Página de error
		include('core/controllers/indexController.php');
	}

?>