<?php  
	
	if(!isset($_SESSION['idEmpleado'], $_SESSION['correo'], $_SESSION['password'])) {
		if($_POST){
			include('core/models/class.CatalogoPromocionesModel.php');
			$acceso = new CatalogoPromocionesModel();
			$acceso->Registro();
			exit;
		}else{ 	
			$template = new Smarty();
			$template->display("catalogos/GCatalogoPromociones.tpl");
		}
	} else 
		header('location: ?view=Login');

	

?>