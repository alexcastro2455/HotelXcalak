<?php 

	public Acceso{

		private $correo;
		private $password;
		private $session;

		//metodo para encriptar
		//volteamos la contraseña y la convertimos a MD5 y luego la retornamos
		private function Encrypt($string){
			$sizeof = strlen($string);
			$result = '';

			//ciclo for donde vamos volteando la contraseña
			for($x = $sizeof; $x >= 0; $x--)
				$result .= $string[$x];

			//convertimos a md5
			$result = md5($result);
			return $result;
			
		}

		public function Login(){
			try {

				//definimos que los datos no estén vacíos
				if(!empty($_POST['correo']) and !empty($_POST['password']) and !empty($_POST['session'])){
					$db = new Conexion();
					$this->correo = $db->real_escape_string($_POST['correo']);
					$this->password = $db->real_escape_string($_POST['password']);//$this->Encrypt($_POST['password']);


					//query a la BD consultando las credenciales
				 	$sql = $db->query("SELECT e.*, pt.puesto, tu.tipoUsuario, su.ubicacion from empleados as e
										inner join puestos_trabajo as pt
										on e.puestos_trabajo_idPuestoTrabajo = pt.idPuestoTrabajo
										inner join tipo_usuario as tu
										inner join sucursales as su
										on e.sucursales_idSucursal = su.idSucursal
										on e.tipo_usuario_idTipoUsuario = tu.idTipoUsuario where correo = '$this->correo' and password= '$this->password';");
				 	

				 	//método que verifica que si trae un row, quiere decir que si coincidieron las credenciales
				 	if($db->rows(sql) > 0){

				 		//guardamos datos en variables de sesión
				 		$datos = $db->recorrer(sql);
				 		$_SESSION['idEmp'] = $datos['idEmpleado'];
				 		$_SESSION['nombre'] = $datos['nombre'];
				 		$_SESSION['apellido'] = $datos['apellido'];
				 		$_SESSION['direccion'] = $datos['direccion'];
				 		$_SESSION['correo'] = $datos['correo'];
				 		$_SESSION['password'] = $datos['password'];
				 		$_SESSION['ubicacion'] = $datos['ubicacion'];
				 		$_SESSION['tipoUsuario'] = $datos['tipoUsuario'];
				 		$_SESSION['puesto'] = $datos['puesto'];

				 		//Método para hacer duraderá la sesión
						if($_POST['session'] == true) 
						ini_set('session.cookie_lifetime', time() + (60 * 60 * 24 * 2));

						echo 1; //si todo esta bien imprime esto

				 	}else {
				 		throw new Exception(2);
				 		
				 	}


					$db->liberar();
			 		$db->claso();
				}else{
					throw new Exception("Error: Datos vacíos.");
				}
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function Recuperar(){

		}

		public function Registrar(){

		}

	}

 ?>