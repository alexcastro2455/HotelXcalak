<?php  

	class HabitacionesEntidad{
		public $idHabitacion;

		function get_idHabitacion()
		{
			return $this->idHabitacion;
		}

		function set_idHabitacion($idHabitacion)
		{
			$this->idHabitacion = $idHabitacion;
		}

		////////////////////////////
		public $numCamas;

		function get_numCamas()
		{
			return $this->numCamas;
		}

		function set_numCamas($numCamas)
		{
			$this->numCamas = $numCamas;
		}


		////////////////////////////
		public $numPersonas;

		function get_numPersonas()
		{
			return $this->numPersonas;
		}

		function set_numPersonas($numPersonas)
		{
			$this->numPersonas = $numPersonas;
		}


		/////////////////////////////
		public $maxPersonasExtra;

		function get_maxPersonasExtra()
		{
			return $this->maxPersonasExtra;
		}

		function set_maxPersonasExtra($maxPersonasExtra)
		{
			$this->maxPersonasExtra = $maxPersonasExtra;
		}


		//////////////////////////////
		public $numHabitacion;

		function get_numHabitacion()
		{
			return $this->numHabitacion;
		}

		function set_numHabitacion($numHabitacion)
		{
			$this->numHabitacion = $numHabitacion;
		}


		/////////////////////////////
		public $precio;

		function get_precio()
		{
			return $this->precio;
		}

		function set_precio($precio)
		{
			$this->precio = $precio;
		}


		/////////////////////////////
		public $rutaFoto;

		function get_rutaFoto()
		{
			return $this->rutaFoto;
		}

		function set_rutaFoto($rutaFoto)
		{
			$this->rutaFoto = $rutaFoto;
		}


		//////////////////////////////
		public $tipo_habitacion_idTipoHabitacion;

		function get_tipo_habitacion_idTipoHabitacion()
		{
			return $this->tipo_habitacion_idTipoHabitacion;
		}

		function set_tipo_habitacion_idTipoHabitacion($tipo_habitacion_idTipoHabitacion)
		{
			$this->tipo_habitacion_idTipoHabitacion = $tipo_habitacion_idTipoHabitacion;
		}


		/////////////////////////////
		public $status_habitacion_idStatusHabitacion;

		function get_status_habitacion_idStatusHabitacion()
		{
			return $this->status_habitacion_idStatusHabitacion;
		}

		function set_status_habitacion_idStatusHabitacion($status_habitacion_idStatusHabitacion)
		{
			$this->status_habitacion_idStatusHabitacion = $status_habitacion_idStatusHabitacion;
		}


		///////////////////////////////
		public $sucursales_idSucursal;

		function get_sucursales_idSucursal()
		{
			return $this->sucursales_idSucursal;
		}

		function set_sucursales_idSucursal($sucursales_idSucursal)
		{
			$this->sucursales_idSucursal = $sucursales_idSucursal;
		}


		///////////////////////////////
		public $tipo_cama_idTipoCama;

		function get_tipo_cama_idTipoCama()
		{
			return $this->tipo_cama_idTipoCama;
		}

		function set_tipo_cama_idTipoCama($tipo_cama_idTipoCama)
		{
			$this->tipo_cama_idTipoCama = $tipo_cama_idTipoCama;
		}

	}

?>