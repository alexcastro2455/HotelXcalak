<?php  

	class ServiciosEntidad{
		
		public $idServicio;

		function get_idServicio()
		{
			return $this->idServicio;
		}

		function set_idServicio($idServicio)
		{
			$this->idServicio = $idServicio;
		}


		//////////////////////
		public $nombre;

		function get_nombre()
		{
			return $this->nombre;
		}

		function set_nombre($nombre)
		{
			$this->nombre = $nombre;
		}


		//////////////////////
		public $precio;

		function get_precio()
		{
			return $this->precio;
		}

		function set_precio($precio)
		{
			$this->precio = $precio;
		}


		/////////////////////
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