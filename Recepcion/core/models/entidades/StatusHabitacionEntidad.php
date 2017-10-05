<?php  

	class StatusHabitacionEntidad{

		public $idStatusHabitacion;

		function get_idStatusHabitacion()
		{
			return $this->idStatusHabitacion;
		}

		function set_idStatusHabitacion($idStatusHabitacion)
		{
			$this->idStatusHabitacion = $idStatusHabitacion;
		}


		////////////////////////////
		public $status;

		function get_status()
		{
			return $this->status;
		}

		function set_status($status)
		{
			$this->status = $status;
		}
		
	}	


?>