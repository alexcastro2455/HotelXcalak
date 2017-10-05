<?php 
	
	if(!isset($_SESSION['idEmpleado'], $_SESSION['correo'], $_SESSION['password'])){
			/*Si existe post es que se mando el formulario*/
		if($_POST){
			include('core/models/class.Acceso.php');
			$acceso = new Acceso();
			$acceso->Login();
			exit;
		}else{
			$template = new Smarty();
			$template->display('public/Login.tpl');
		}
	}else
		header('location: ?view=Index');
	
?>