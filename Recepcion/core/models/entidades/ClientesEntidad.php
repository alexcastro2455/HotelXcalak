<?php  

	class ClientesEntidad{

		public $idCliente;

		function get_idCliente()
		{
			return $this->idCliente;
		}

		function set_idCliente($idCliente)
		{
			$this->idCliente = $idCliente;
		}


		//////////////////////////////////
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

		function set_apellido($apellido)
		{
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


		/////////////////////////////////////////
		public $estado;

		function get_estado()
		{
			return $this->estado;
		}

		function set_estado($estado)
		{
			$this->estado = $estado;
		}


		/////////////////////////////////////////
		public $pais;

		function get_pais()
		{
			return $this->pais;
		}

		function set_pais($pais)
		{
			$this->pais = $pais;
		}


		//////////////////////////////////////////
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


		////////////////////////////////////
		public $password;

		function get_password()
		{
			return $this->password;
		}

		function set_password($password)
		{
			$this->password = $password;
		}


		///////////////////////////////////
		public $tipo_cliente_idTipoCliente;

		function get_tipo_cliente_idTipoCliente()
		{
			return $this->tipo_cliente_idTipoCliente;
		}

		function set_tipo_cliente_idTipoCliente($tipo_cliente_idTipoCliente)
		{
			$this->tipo_cliente_idTipoCliente = $tipo_cliente_idTipoCliente;
		}
	}

?>