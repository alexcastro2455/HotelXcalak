<?php  
	
	include "entidades/HabitacionesEntidad.php";

	class CatalogoHabitacionesModel{


		////Registrar/////
		public function Registro(){
			try {

				//definimos que los datos no estén vacíos
				if(!empty($_POST['numHabitacion']) and !empty($_POST['numPersonas']) and !empty($_POST['maxPersonasExtra'])
					and !empty($_POST['precio'])){

					$db = new Conexion();
					
					///creo un objeto de mi clase HabitacionesEntidad
					$habitaciones = new HabitacionesEntidad();

					//$this->correo = $db->real_escape_string($_POST['correo']);
					////voy metiendo los datos a mi objeto
					
					$habitaciones->numCamas = $db->real_escape_string($_POST['numCamas']);
					$habitaciones->numPersonas = $db->real_escape_string($_POST['numPersonas']);
					$habitaciones->maxPersonasExtra = $db->real_escape_string($_POST['maxPersonasExtra']);
					$habitaciones->numHabitacion = $db->real_escape_string($_POST['numHabitacion']);
					$habitaciones->precio = $db->real_escape_string($_POST['precio']);
					$habitaciones->rutaFoto = $db->real_escape_string($_POST['rutaFoto']);
					$habitaciones->tipo_habitacion_idTipoHabitacion = $db->real_escape_string($_POST['tipo_habitacion_idTipoHabitacion']);
					$habitaciones->status_habitacion_idStatusHabitacion = "1";
					$habitaciones->sucursales_idSucursal = $_SESSION['sucursales_idSucursal'];
					$habitaciones->tipo_cama_idTipoCama = $db->real_escape_string($_POST['tipo_cama_idTipoCama']);

					//query a la BD consultando las credenciales
				 	$sql = $db->query("SELECT numHabitacion FROM habitaciones
									   WHERE numHabitacion ='$habitaciones->numHabitacion'");


				 	//método que verifica que si trae un row, quiere decir que si coincidieron las credenciales
				 	if($db->rows($sql) == 0){


				 		//Registramos los datos
				 		$sql2 = $db->query("INSERT INTO habitaciones(numCamas, numPersonas, maxPersonasExtra, numHabitacion, precio, rutaFoto, tipo_habitacion_idTipoHabitacion, status_habitacion_idStatusHabitacion, sucursales_idSucursal, tipo_cama_idTipoCama) VALUES ('$habitaciones->numCamas','$habitaciones->numPersonas','$habitaciones->maxPersonasExtra','$habitaciones->numHabitacion','$habitaciones->precio','$habitaciones->rutaFoto','$habitaciones->tipo_habitacion_idTipoHabitacion','$habitaciones->status_habitacion_idStatusHabitacion','$habitaciones->sucursales_idSucursal','$habitaciones->tipo_cama_idTipoCama');");

				 		if(!$sql2)
				 			echo 2;
				 		else
							echo 1; //si todo esta bien imprime esto
					} else {// existe el correo
				 		throw new Exception(3);
				 		
				 	}


					$db->liberar($sql);
					$db->liberar($sql2);
			 		$db->close();


				}///////fin primer if post////
				else{
					throw new Exception("Error: Datos vacíos.");
				}///else de datos vacíos
			
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

	}////fín de clase

?>