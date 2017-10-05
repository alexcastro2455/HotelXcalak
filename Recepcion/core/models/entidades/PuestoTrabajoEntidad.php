<?php  

	class PuestoTrabajoEntidad{

		public $idPuestoTrabajo;

		function get_idPuestoTrabajo()
		{
			return $this->idPuestoTrabajo;
		}

		function set_idPuestoTrabajo($idPuestoTrabajo)
		{
			$this->idPuestoTrabajo = $idPuestoTrabajo;
		}

		//////////////////////
		public $puesto;

		function get_puesto()
		{
			return $this->puesto;
		}

		function set_puesto($puesto)
		{
			$this->puesto = $puesto;
		}
	}


?>