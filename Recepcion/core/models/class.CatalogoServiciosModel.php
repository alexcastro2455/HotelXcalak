<?php 

	include "entidades/ServiciosEntidad.php";
	
	class CatalogoServiciosModel{

		////Registrar/////
		public function Registro(){
			try {

				//definimos que los datos no estén vacíos
				if(!empty($_POST['nombre'])){

					$db = new Conexion();
					
					///creo un objeto de mi clase EmpleadosEntidad
					$servicios = new ServiciosEntidad();

					//$this->correo = $db->real_escape_string($_POST['correo']);
					////voy metiendo los datos a mi objeto
					
					$servicios->nombre = $db->real_escape_string($_POST['nombre']);
					$servicios->precio = $db->real_escape_string($_POST['precio']);
					$servicios->descripcion = $db->real_escape_string($_POST['descripcion']);


				 	//Registramos los datos
				 	$sql = $db->query("INSERT INTO cat_servicios (nombre, precio, descripcion) VALUES ('$servicios->nombre','$servicios->precio', '$servicios->descripcion');");

				 		if(!$sql)
				 			echo 2;
				 		else
							echo 1; //si todo esta bien imprime esto
				 		
				 		$db->liberar($sql);
			 			$db->close();

			 		///primer if de datos vacíos
				 } else{
					throw new Exception("Error: Datos vacíos.");
				 }////else de datos vacíos

			
			////fin try 
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}////fin registro


		////Modificar/////
		public function Modificar(){
			
		}

		////Recuperar/////
		public function Recuperar(){

		}

		////Eliminar//////
		public function Eliminar(){

		}

	}///termina  clase


?>