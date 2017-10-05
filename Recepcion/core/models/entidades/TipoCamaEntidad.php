<?php  
	class TipoCamaEntidad{

		public $idTipoCama;

		function get_idTipoCama()
		{
			return $this->idTipoCama;
		}

		function set_idTipoCama($idTipoCama)
		{
			$this->idTipoCama = $idTipoCama;
		}


		public $tipo;

		function get_tipo()
		{
			return $this->tipo;
		}

		function set_tipo($tipo)
		{
			$this->tipo = $tipo;
		}
	}
?>