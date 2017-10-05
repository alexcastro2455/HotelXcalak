<?php  
	
	include "entidades/EmpleadosEntidad.php";

	class CatalogoEmpleadoModel{

		////Registrar/////
		public function Registro(){
			try {

				//definimos que los datos no estén vacíos
				if(!empty($_POST['correo']) and !empty($_POST['password']) and !empty($_POST['correo'])){

					$db = new Conexion();
					
					///creo un objeto de mi clase EmpleadosEntidad
					$empleados = new EmpleadosEntidad();

					//$this->correo = $db->real_escape_string($_POST['correo']);
					////voy metiendo los datos a mi objeto
					
					$empleados->nombre = $db->real_escape_string($_POST['nombre']);
					$empleados->apellido = $db->real_escape_string($_POST['apellido']);
					$empleados->direccion = $db->real_escape_string($_POST['direccion']);
					$empleados->lugarOrigen = $db->real_escape_string($_POST['lugarOrigen']);
					$empleados->estadoOrigen = $db->real_escape_string($_POST['estadoOrigen']);
					$empleados->correo = $db->real_escape_string($_POST['correo']);
					$empleados->telefono = $db->real_escape_string($_POST['telefono']);
					$empleados->password = $db->real_escape_string($_POST['password']);
					$empleados->tipo_usuario_idTipoUsuario = $db->real_escape_string($_POST['tipo_usuario_idTipoUsuario']);
					$empleados->puestos_trabajo_idPuestoTrabajo = $db->real_escape_string($_POST['puestos_trabajo_idPuestoTrabajo']);
					$empleados->status_empleado_idStatusEmpleado = "1";//$db->real_escape_string(['status_empleado_idStatusEmpleado']);
					$empleados->sucursales_idSucursal = $_SESSION['sucursales_idSucursal'];

					//query a la BD consultando las credenciales
				 	$sql = $db->query("SELECT idEmpleado FROM empleados
										WHERE correo = '$empleados->correo'");


				 	//método que verifica que si trae un row, quiere decir que si coincidieron las credenciales
				 	if($db->rows($sql) == 0){


				 		//Registramos los datos
				 		$sql2 = $db->query("INSERT INTO empleados(nombre, apellido, direccion, lugarOrigen, estadoOrigen, correo, telefono, password, tipo_usuario_idTipoUsuario, puestos_trabajo_idPuestoTrabajo, status_empleado_idStatusEmpleado, sucursales_idSucursal) VALUES ('$empleados->nombre', '$empleados->apellido', '$empleados->direccion','$empleados->lugarOrigen', '$empleados->estadoOrigen', '$empleados->correo', '$empleados->telefono', '$empleados->password', '$empleados->tipo_usuario_idTipoUsuario', '$empleados->puestos_trabajo_idPuestoTrabajo', '$empleados->puestos_trabajo_idPuestoTrabajo', '$empleados->status_empleado_idStatusEmpleado');");

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

	}

?>