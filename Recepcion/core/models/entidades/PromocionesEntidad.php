<?php  

	class PromocionesEntidad{
		
		public $idPromocion;

		function get_idPromocion()
		{
			return $this->idPromocion;
		}

		function set_idPromocion($idPromocion)
		{
			$this->idPromocion = $idPromocion;
		}


		//////////////////////////////////
		public $descripcion;

		function get_descripcion()
		{
			return $this->descripcion;
		}

		function set_descripcion($descripcion)
		{
			$this->descripcion = $descripcion;
		}


		//////////////////////////////////
		public $fechaInicial;

		function get_fechaInicial()
		{
			return $this->fechaInicial;
		}

		function set_fechaInicial($fechaInicial)
		{
			$this->fechaInicial = $fechaInicial;
		}


		//////////////////////////////////
		public $fechaTermino;

		function get_fechaTermino()
		{
			return $this->fechaTermino;
		}

		function set_fechaTermino($fechaTermino)
		{
			$this->fechaTermino = $fechaTermino;
		}


		//////////////////////////////////
		public $descuento;

		function get_descuento()
		{
			return $this->descuento;
		}

		function set_descuento($descuento)
		{
			$this->descuento = $descuento;
		}

	}

?>