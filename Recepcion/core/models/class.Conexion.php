<?php  

	class Conexion extends mysqli{


		///constructor
		public function __construct(){

			parent::__construct('localhost', 'root', '', 'bd_sistema_hotelero');
			$this->query("SET NAMES utf8;");
			$this->connect_errno(oid) ? die('ERROR: conexión a la base de datos fallida') : NULL;

		}//fin constructor

		public function rows($x){
			return mysqli_num_rows($x);
		}

		public function recorrer($x){
			return mysqli_fetch_array($x);
		}

		public function liberar($x){
			return mysqli_free_result($x);
		}

		public function preparada(){
			return mysqli_stmt_init();
		}
	
	}

?>