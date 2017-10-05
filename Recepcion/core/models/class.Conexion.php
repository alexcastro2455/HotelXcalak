<?php  

	class Conexion extends mysqli{


		///constructor
		public function __construct(){

			parent::__construct('localhost', 'root', '', 'bd_sistema_hotelero');
			$this->query("SET NAMES utf8;");
			//devuelve el código de error de la últila llamada
			$this->connect_errno ? die('ERROR: Conexión a la base de datos fallida.') : null; 

		}//fin constructor

		public function rows($x){
			return mysqli_num_rows($x);
		}

		public function recorrer($x){
			return mysqli_fetch_array($x);
		}

		//libera la memoria asociada con un resultado
		public function liberar($x){
			return mysqli_free_result($x);
		}

		public function preparada(){
			return mysqli_stmt_init();
		}
	
	}

?>