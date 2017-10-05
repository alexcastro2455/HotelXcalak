<?php  

	class EmpleadosEntidad{
		public $idEmpleado;

		function get_idEmpleado()
		{
			return $this->idEmpleado;
		}

		function set_idEmpleado($idEmpleado){
			$this->idEmpleado = $idEmpleado;
		}

		/////////////////////////////////////////
		public $nombre;

		function get_nombre()
		{
			return $this->nombre;
		}

		function set_nombre($nombre)
		{
			$this->nombre = $nombre;
		}


		////////////////////////////////////////
		public $apellido;

		function get_apellido()
		{
			return $this->apellido;
		}

		function set_apellido($apellido){
			$this->apellido = $apellido;
		}


		////////////////////////////////////////
		public $direccion;

		function get_direccion()
		{
			return $this->direccion;
		}

		function set_direccion($direccion)
		{
			$this->direccion = $direccion;
		}


		//////////////////////////////////////
		public $lugarOrigen;

		function get_lugarOrigen()
		{
			return $this->lugarOrigen;
		}

		function set_lugarOrigen($lugarOrigen)
		{
			$this->lugarOrigen = $lugarOrigen;
		}


		///////////////////////////////////////
		public $estadoOrigen;

		function get_estadoOrigen()
		{
			return $this->estadoOrigen;
		}

		function set_estadoOrigen($estadoOrigen)
		{
			$this->estadoOrigen = $estadoOrigen;
		}


		///////////////////////////////////////
		public $correo;

		function get_correo()
		{
			return $this->correo;
		}

		function set_correo($correo)
		{
			$this->correo = $correo;
		}


		////////////////////////////////////
		public $telefono;

		function get_telefono()
		{
			return $this->telefono;
		}

		function set_telefono($telefono)
		{
			$this->telefono = $telefono;
		}


		/////////////////////////////////////
		public $password;

		function get_password()
		{
			return $this->password;
		}

		function set_password($password)
		{
			$this->password = $password;
		}


		//////////////////////////////////
		public $tipo_usuario_idTipoUsuario;

		function get_tipo_usuario_idTipoUsuario()
		{
			return $this->tipo_usuario_idTipoUsuario;
		}

		function set_tipo_usuario_idTipoUsuario($tipo_usuario_idTipoUsuario)
		{
			$this->tipo_usuario_idTipoUsuario = $tipo_usuario_idTipoUsuario;
		}


		//////////////////////////////////////
		public $puestos_trabajo_idPuestoTrabajo;

		function get_puestos_trabajo_idPuestoTrabajo()
		{
			return $this->puestos_trabajo_idPuestoTrabajo;
		}

		function set_puestos_trabajo_idPuestoTrabajo($puestos_trabajo_idPuestoTrabajo)
		{
			$this->puestos_trabajo_idPuestoTrabajo = $puestos_trabajo_idPuestoTrabajo;
		}

		////////////////////////////////////
		public $status_empleado_idStatusEmpleado;

		function get_status_empleado_idStatusEmpleado()
		{
			return $this->status_empleado_idStatusEmpleado;
		}

		function set_status_empleado_idStatusEmpleado($status_empleado_idStatusEmpleado)
		{
			$this->status_empleado_idStatusEmpleado = $status_empleado_idStatusEmpleado;
		}


		////////////////////////////////////
		public $sucursales_idSucursal;

		function get_sucursales_idSucursal()
		{
			return $this->sucursales_idSucursal;
		}

		function set_sucursales_idSucursal($sucursales_idSucursal)
		{
			$this->sucursales_idSucursal = $sucursales_idSucursal;
		}
	}

?>