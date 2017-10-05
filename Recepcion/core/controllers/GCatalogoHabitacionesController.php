<?php  
	
	if(!isset($_SESSION['idEmpleado'], $_SESSION['correo'], $_SESSION['password'])) {
		if($_POST){
			include('core/models/class.CatalogoHabitacionesModel.php');
			$acceso = new CatalogoHabitacionesModel();
			$acceso->Registro();
			exit;
		}else{ 	
			$template = new Smarty();
			$template->display("catalogos/GCatalogoHabitaciones.tpl");
		}
	} else 
		header('location: ?view=Login');


	

?>