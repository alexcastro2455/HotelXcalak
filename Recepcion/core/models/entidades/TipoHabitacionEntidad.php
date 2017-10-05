<?php  

	class TipoHabitacionEntidad{


		public $idTipoHabitacion;

		function get_idTipoHabitacion()
		{
			return $this->idTipoHabitacion;
		}

		function set_idTipoHabitacion($idTipoHabitacion)
		{
			$this->idTipoHabitacion = $idTipoHabitacion;
		}


		//////////////////////////
		public $tipo;

		function get_tipo()
		{
			return $this->tipo;
		}

		function set_tipo($tipo)
		{
			$this->tipo = $tipo;
		}


		///////////////////////////
		public $descripcion;

		function get_descripcion()
		{
			return $this->descripcion;
		}

		function set_descripcion($descripcion)
		{
			$this->descripcion = $descripcion;
		}
		
	}


?>