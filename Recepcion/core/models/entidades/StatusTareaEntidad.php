<?php  


	class StatusTareaEntidad{


		public $idStatusTarea;

		function get_idStatusTarea()
		{
			return $this->idStatusTarea;
		}

		function set_idStatusTarea($idStatusTarea)
		{
			$this->idStatusTarea = $idStatusTarea;
		}


		//////////////////////
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