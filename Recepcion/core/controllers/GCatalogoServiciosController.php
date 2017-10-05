<?php  
	
	if(!isset($_SESSION['idEmpleado'], $_SESSION['correo'], $_SESSION['password'])) {
		if($_POST){
			include('core/models/class.CatalogoServiciosModel.php');
			$acceso = new CatalogoServiciosModel();
			$acceso->Registro();
			exit;
		}else{ 	
			$template = new Smarty();
			$template->display("catalogos/GCatalogoServicios.tpl");
		}
	} else 
		header('location: ?view=Login');
?>