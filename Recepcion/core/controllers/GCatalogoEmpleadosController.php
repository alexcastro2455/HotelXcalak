<?php  
	if(!isset($_SESSION['idEmpleado'], $_SESSION['correo'], $_SESSION['password'])) {
		if($_POST){
			include('core/models/class.CatalogoEmpleadoModel.php');
			$acceso = new CatalogoEmpleadoModel();
			$acceso->Registro();
			exit;
		}else{ 
			$template = new Smarty();
			$template->display("catalogos/GCatalogoEmpleados.tpl");
		}
	}else 
		header('location: ?view=Login');
?>